import sys
class SHA1:
    #预设初始哈希值
    def __init__(self):
        self.__H = [
            0x67452301,
            0xEFCDAB89,
            0x98BADCFE,
            0x10325476,
            0xC3D2E1F0
            ]

    def __str__(self):
        return ''.join((hex(h)[2:]).rjust(8, '0') for h in self.__H)

    #循环左移n位
    def __ROTL(n, x, w=32):
        return ((x << n) | (x >> w - n))

    #补位
    def __padding(stream):
        l = len(stream)
        print('原始消息长度:{0}'.format(l*8))
        hl = [int((hex(l*8)[2:]).rjust(16, '0')[i:i+2], 16)
              for i in range(0, 16, 2)]
        print('补64位长度消息:')
        [print(bin(w)[2:].zfill(8), end='') for w in hl]
        print()

        l0 = (56 - l) % 64
        if not l0:
            l0 = 64

        if isinstance(stream, str):
            stream += chr(0b10000000)
            stream += chr(0)*(l0-1)
            for a in hl:
                stream += chr(a)
        elif isinstance(stream, bytes):
            stream += bytes([0b10000000])
            stream += bytes(l0-1)
            stream += bytes(hl)

        return stream

    def __prepare(stream):
        M = []

        #消息分组
        n_blocks = len(stream) // 64
        print('分组总数 N={0}'.format(n_blocks))

        stream = bytearray(stream)

        for i in range(n_blocks):
            m = []

            for j in range(16):
                n = 0
                for k in range(4):
                    n <<= 8
                    n += stream[i*64 + j*4 + k]

                m.append(n)

            print('消息组M[{0}]='.format(i+1))
            [print(bin(x)[2:].zfill(32)) for x in m] 
            M.append(m[:])

        return M

    def __process_block(self, block):
        MASK = 0xffffffff;

        W = block[:]
        for t in range(16, 80):
            W.append(SHA1.__ROTL(1, (W[t-3] ^ W[t-8] ^ W[t-14] ^ W[t-16]))
                     & MASK)

        a, b, c, d, e = self.__H[:]

        for t in range(80):
            if t <= 19:
                K = 0x5a827999
                f = (b & c) ^ (~b & d)
            elif t <= 39:
                K = 0x6ed9eba1
                f = b ^ c ^ d
            elif t <= 59:
                K = 0x8f1bbcdc
                f = (b & c) ^ (b & d) ^ (c & d)
            else:
                K = 0xca62c1d6
                f = b ^ c ^ d

            T = ((SHA1.__ROTL(5, a) + f + e + K + W[t]) & MASK)
            e = d
            d = c
            c = SHA1.__ROTL(30, b) & MASK
            b = a
            a = T

        self.__H[0] = (a + self.__H[0]) & MASK
        self.__H[1] = (b + self.__H[1]) & MASK
        self.__H[2] = (c + self.__H[2]) & MASK
        self.__H[3] = (d + self.__H[3]) & MASK
        self.__H[4] = (e + self.__H[4]) & MASK

    def calc(self, stream):
        stream = SHA1.__padding(stream)
        stream = SHA1.__prepare(stream)

        for block in stream:
            self.__process_block(block)

    def digest(self):
        pass

    def hexdigest(self):
        s = ''
        for h in self.__H:
            s += (hex(h)[2:]).rjust(8, '0')
        return s

def main():
    #要计算的原始消息
    M = 'abc'
    print('原始消息:{0}'.format(M))
    H = SHA1()
    H.calc(bytes(M, 'utf8'))
    print('最终结果:'+H.hexdigest())

if __name__ == '__main__':
    main()
