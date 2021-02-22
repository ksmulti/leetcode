# you can write to stdout for debugging purposes, e.g.
# print("this is a debug message")

def solution(A):
    # write your code in Python 3.6
    pass
    A = sorted(A)
    if A[0] > 1 or A[-1] < 1:
        return 1
    
    minn = 1
    for n in A:
        #print(n)
        if n == minn:
            minn += 1
            
    return minn