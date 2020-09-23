/**
 * Definition for singly-linked list.
 * struct ListNode {
 *     int val;
 *     ListNode *next;
 *     ListNode() : val(0), next(nullptr) {}
 *     ListNode(int x) : val(x), next(nullptr) {}
 *     ListNode(int x, ListNode *next) : val(x), next(next) {}
 * };
 */

struct ListNode {
    int val;
    ListNode *next;
    ListNode() : val(0), next(nullptr) {}
    ListNode(int x) : val(x), next(nullptr) {}
    ListNode(int x, ListNode *next) : val(x), next(next) {}
};
 
class Solution {
public:
    ListNode* removeElements(ListNode* head, int val) {
        
        if (head == nullptr)
            return head;
        
        ListNode* prev = nullptr;
        ListNode* now = head;
        ListNode* next = now->next;
        
        while (now != nullptr) {
            if (now->val == val) {
                if (prev != nullptr) {
                    prev->next = now->next;
                }
                else {
                    head = now->next;
                }
                delete(now);
                now = nullptr;
            }
            
            prev = (now == nullptr) ? prev : now;
            now = next;            
            if (next != nullptr)
                next = next->next;
        }
        
        return head;
    }
};