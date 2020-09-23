<?php

class Solution {

    /**
     * @param String $A
     * @param String $B
     * @return Boolean
     */
    function rotateString($A, $B) {
        
        $len_A = strlen($A);
        $len_B = strlen($B);
        if ($len_A !== $len_B) {
            return false;
        }
        else if ($len_A === 0){
            return true;
        }

        $count = 0;
        while ($count < $len_A) {
            if (strcmp($A, $B) == 0) {
                return true;
            }

            $A = substr($A, 1) . substr($A, 0, 1);
            $count++;
        }

        return false;
    }
}