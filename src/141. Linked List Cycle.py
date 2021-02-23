# Definition for singly-linked list.
# class ListNode:
#     def __init__(self, x):
#         self.val = x
#         self.next = None

class Solution:
    def hasCycle(self, head: ListNode) -> bool:
        d = {}
        
        while head != None:
            if d.__contains__(head):
                return True
            else:
                d[head] = True
                head = head.next
                
        return False
        