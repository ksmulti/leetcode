# you can write to stdout for debugging purposes, e.g.
# print("this is a debug message")

def solution(A, K):
    if not A:
        return A

    for num in range(K):
        last = A.pop(-1)
        A.insert(0, last)

    return A