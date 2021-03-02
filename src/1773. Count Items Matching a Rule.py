class Solution:
    def countMatches(self, items: List[List[str]], ruleKey: str, ruleValue: str) -> int:
        count = 0
        for item in items:
            if ruleKey == "type":
                pass
                if item[0] == ruleValue:
                    count += 1
            if ruleKey == "color":
                pass
                if item[1] == ruleValue:
                    count += 1
            if ruleKey == "name":
                pass
                if item[2] == ruleValue:
                    count += 1
                    
        return count