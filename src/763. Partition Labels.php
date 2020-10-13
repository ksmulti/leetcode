<?php

class Solution {

    /**
     * @param String $S
     * @return Integer[]
     */
    function partitionLabels($S) {
        $appear_last_pos = [];

        for ($i = 0; $i < strlen($S); $i++) {
            $appear_last_pos[$S[$i]] = $i;
        }
        //var_dump($appear_last_pos);

        $start = 0;
        $last = 0;
        $out = [];

        for ($i = 0; $i < strlen($S); $i++) {
            if ($last < $appear_last_pos[$S[$i]]){
                $last = $appear_last_pos[$S[$i]];
            }

            if ($i == $last) {
                // cut
                $out[] = $last - $start + 1;
                $start = $last + 1;
            }
        }

        return $out;
    }
}