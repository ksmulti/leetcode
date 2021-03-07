class Solution:
    def addBinary(self, a: str, b: str) -> str:
        outString = ""
        val = 0
        carry = 0
        
        for i in range(max(len(a), len(b))):
            val = 0
            if i < len(a):
                val += int(a[-(i+1)])
            if i < len(b):
                val += int(b[-(i+1)])
            val += carry
            carry = val // 2
            val = val % 2
            outString += str(val)
            
        if carry == 1:
            outString += "1"
            
        return outString[::-1]