import hashlib

# 目标SHA-1哈希值
target_hash = "b498bfa2498e21325d1178417bea459eb2cd28f8"

# 检查一个数字是否是目标哈希值
def is_target_hash(num):
    hash_object = hashlib.sha1(str(num).encode())
    return hash_object.hexdigest() == target_hash

# 枚举所有6位数字
for i in range(100000, 999999):
    if is_target_hash(i):
        print(f"原始数字是: {i}")
        break  # 如果找到匹配，打印结果并退出循环
