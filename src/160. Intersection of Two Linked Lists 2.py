# Definition for singly-linked list.
# class ListNode:
#     def __init__(self, x):
#         self.val = x
#         self.next = None

class Solution:
    def getIntersectionNode(self, headA: ListNode, headB: ListNode) -> ListNode:
        if headA is None or headB is None:
            return None
        
        curA = headA
        curB = headB
        
        while curA != curB:
            if curA == None:
                curA = headB
            else:
                curA = curA.next
            
            if curB == None:
                curB = headA
            else:
                curB = curB.next
                
        return curA