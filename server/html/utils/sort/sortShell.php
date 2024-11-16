<?php
    function sortShell($arr) {
        $size = count($arr);
        $step = intdiv($size, 2);
        while ($step > 0) {
            for ($i = $step; $i < $size; ++$i) 
                if ($arr[$i - $step] > $arr[$i]) {
                    $t = $arr[$i - $step];
                    $arr[$i - $step] = $arr[$i];
                    $arr[$i] = $t;
                }
            --$step;
        }
        return $arr;
    }
?>