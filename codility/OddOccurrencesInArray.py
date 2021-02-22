# you can write to stdout for debugging purposes, e.g.
# print("this is a debug message")

def solution(A):
    # write your code in Python 3.6
    dictA = {}

    for v in A:
        if dictA.__contains__(v):
            dictA[v] = not dictA[v]
        else:
            dictA[v] = True
    
    #print(dictA)

    for v in dictA:
        #print(v)
        if dictA[v] == True:
            return v

    return 0


