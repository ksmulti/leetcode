<?php

class Solution {

    /**
     * @param Integer[] $bits
     * @return Boolean
     */
    function isOneBitCharacter($bits) {
        $i = 0;
        $n = count($bits);
        while ($i < $n-1) {
            if ($bits[$i] === 0) {
                $i += 1;
            }
            else {
                $i += 2;
            }
        }

        if ($i == $n-1) {
            return true;
        }
        else {
            return false;
        }
    }
}