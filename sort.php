<?php
    $arr = array("One","Two","Three","Four","Five","Six","Seven");
    echo "Array: ";
    var_dump($arr);
    echo "<br>Sorted array :";
    sort($arr);
    var_dump($arr);
    echo "<br>Reverse Sorted: ";
    rsort($arr);
    var_dump($arr);

    $arr2= array("First" => "One",
                 "Second" => "Two",
                 "Third" =>"Three",
                 "Fourth" => "Four");

    echo "<br>Array2: ";
    var_dump($arr2);
    echo "<br>Sorted according to value :";
    asort($arr2);
    var_dump($arr2);
    echo "<br>Sorted according to key: ";
    ksort($arr2);
    var_dump($arr2);
    echo "<br>Reverse Sorted according to key: ";
    krsort($arr2);
    var_dump($arr2);
    