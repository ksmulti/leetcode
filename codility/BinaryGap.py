# you can write to stdout for debugging purposes, e.g.
# print("this is a debug message")

def solution(N):
    # write your code in Python 3.6
    pass
    if N == 0:
        return 0

    maxGap = 0
    countZero = 0
    startFlag = False
    strN = "{0:b}".format(N)
    for c in strN:
        if c == "1":
            startFlag = True
        
        if startFlag:
            if c == "0":
                countZero += 1
            elif c == "1":
                if countZero > maxGap:
                    maxGap = countZero
                    countZero = 0

    return maxGap