<?php

class MinStack {
    private $arr = [];
    /**
     * initialize your data structure here.
     */
    function __construct() {
        
    }
  
    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        array_push($this->arr, $x);
    }
  
    /**
     * @return NULL
     */
    function pop() {
        array_pop($this->arr);
    }
  
    /**
     * @return Integer
     */
    function top() {
        return end($this->arr);
    }
  
    /**
     * @return Integer
     */
    function getMin() {
        return min($this->arr);
    }
}

/**
 * Your MinStack object will be instantiated and called as such:
 * $obj = MinStack();
 * $obj->push($x);
 * $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->getMin();
 */