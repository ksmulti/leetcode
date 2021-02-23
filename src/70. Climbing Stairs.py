class Solution:
    def climbStairs(self, n: int) -> int:
        prev = 0
        current = 1
        
        for i in range(n):
            temp = prev
            prev = current
            current = temp + current
            
        return current