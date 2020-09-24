<?php

class Solution {

    /**
     * @param String $s
     * @param Integer[] $indices
     * @return String
     */
    function restoreString($s, $indices) {
        $out = $s;
        for ($i = 0; $i < strlen($s); $i++) {
            $out[$indices[$i]] = $s[$i];
        }
        return $out;
    }
}