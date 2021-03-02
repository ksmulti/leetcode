class Solution:
    f ={0:1, 1:1, 2:2}
    def climbStairs(self, n: int) -> int:
        if n == 0:
            return 1
        if n == 1:
            return 1
        
        if self.f.__contains__(n):
            return self.f[n]
        
        self.f[n] = self.climbStairs(n-1) + self.climbStairs(n-2)
        
        return self.f[n]
    
    