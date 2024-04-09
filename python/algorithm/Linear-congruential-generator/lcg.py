def rng(m=28, a=15, c=5):
    _rng = rng.now
    rng.now = (a*rng.now + c) % m
    print('$$X_{5}  = ( {0} * {1} + {2} )\quad mod \quad {3}  \equiv {4} $$'.format(a, _rng, c, m, rng.now, rng.n)) 
    rng.n = rng.n+1
    return rng.now
rng.now = 1
rng.n = 1
print([rng() for i in range(100)])
