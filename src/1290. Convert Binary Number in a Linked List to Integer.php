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
    private $depth = 0;
    /**
     * @param ListNode $head
     * @return Integer
     */
    function getDecimalValue($head) {
        if ($head->next === null) {
            $this->depth++;
            return $head->val;
        }

        $next_val = $this->getDecimalValue($head->next);
        $this->depth++;
        return $next_val + $head->val*pow(2, $this->depth-1);
    }
}