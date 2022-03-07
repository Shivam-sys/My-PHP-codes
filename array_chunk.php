<?php
    $arr = range(1,20);
    var_dump($arr);
    $rows = array_chunk($arr,3);
    var_dump($rows);
?>