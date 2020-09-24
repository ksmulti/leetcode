<?php

class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function numberOfSteps ($num) {
        $count = 0;
        while ($num > 0) {
            if ($num & 1) {
                $num = $num - 1;
                $count++;
            }
            else {
                $num = $num / 2;
                $count++;
            }
        }
        return $count;
    }
}