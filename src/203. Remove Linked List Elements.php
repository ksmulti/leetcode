<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @param Integer $val
     * @return ListNode
     */
    function removeElements($head, $val) {
        $prev = &$head;
        $now = &$head;

        while (true ){
            if ($now->val == $val) {
                if ($now == $head) {
                    $head = $now->next;
                }
                else {
                    $next = $now->next;
                    $prev->next = $next;
                }
            }

            if ($now->next == null) {
                break;
            }
            else {
                $now = $now->next;
                $prev = $now;
            }
        }

        return $head;
    }
}