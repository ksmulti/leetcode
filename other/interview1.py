import sys
for line in sys.stdin:
    #print(line, end="")
    input = line.split(';')
    input[1] = input[1].strip()
    if input[0] == input[1]:
        print("ZERO")
    if float(input[0]) > float(input[1]):
        print("ERROR")

    if '.' in input[0]:
        input[0] = input[0].replace('.', '')
    else:
        input[0] = input[0] + "00"
    if '.' in input[1]:
        input[1] = input[1].replace('.', '')
    else:
        input[1] = input[1] + "00"
    
    diff = int(input[1])- int(input[0])
    
    outString = ""
    while diff >= 1:
        if diff >= 10000:
            diff = diff - 10000
            outString = outString + ',ONE HUNDRED'
        elif diff >= 5000:
            diff = diff - 5000
            outString = outString + ',FIFTY'
        elif diff >= 2000:
            diff = diff - 2000
            outString = outString + ',TWENTY'
        elif diff >= 1000:
            diff = diff - 1000
            outString = outString + ',TEN'
        elif diff >= 500:
            diff = diff - 500
            outString = outString + ',FIVE'
        elif diff >= 200:
            diff = diff - 200
            outString = outString + ',TWO'
        elif diff >= 100:
            diff = diff - 100
            outString = outString + ',ONE'
        elif diff >= 50:
            diff = diff - 50
            outString = outString + ',HALF DOLLAR'
        elif diff >= 25:
            diff = diff - 25
            outString = outString + ',QUARTER'
        elif diff >= 10:
            diff = diff - 10
            outString = outString + ',DIME'
        elif diff >= 5:
            diff = diff - 5
            outString = outString + ',NICKEL'
        elif diff >= 1:
            diff = diff - 1
            outString = outString + ',PENNY'
            
    print(outString.lstrip(','))