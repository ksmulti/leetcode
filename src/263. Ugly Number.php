<?php

class Solution {

    /**
     * @param Integer $num
     * @return Boolean
     */
    function isUgly($num) {
        if ($num === 1) {
            return true;
        }
        if ($num === 0) {
            return false;
        }

        while (true) {
            if ($num % 2 === 0) {
                $num = $num / 2;
                continue;
            }

            if ($num % 3 === 0) {
                $num = $num / 3;
                continue;
            }

            if ($num % 5 === 0) {
                $num = $num / 5;
                continue;
            }

            if ($num !== 1) {
                return false;
            }
            else {
                return true;
            }
        }
    }
}