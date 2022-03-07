<?php
    $scores = array(12,23,34,22,33);
    $padded = array_pad($scores,9,'s');
    //array_pad( $array_to_pad, size of new array(must be int), value to be filled in space);
    var_dump($scores);
    var_dump($padded);