# Definition for singly-linked list.
# class ListNode:
#     def __init__(self, x):
#         self.val = x
#         self.next = None

class Solution:
    def getIntersectionNode(self, headA: ListNode, headB: ListNode) -> ListNode:
        if headA is None or headB is None:
            return None
        
        dictA = {}
        dictB = {}
        currentB = headB
            
        while currentB != None:
            dictB[currentB] = True
            currentB = currentB.next
            
        out = None
        currentA = headA
        while currentA != None:
            if dictB.__contains__(currentA):
                out = currentA
                break
            currentA = currentA.next
                
        return out