<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function subsets($nums) {
        $out = array();
        $out[] = array();

        foreach($nums as &$num) {
            $n = count($out);
            for ($i = 0; $i < $n; $i++) {
                $new_subset = $out[$i];
                array_push($new_subset, $num);
                $out[] = $new_subset;
            }
        }

        return $out;
    }
}