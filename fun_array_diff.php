<?php
    $arr1 = array("Pen","Pencil");
    $arr2 = array("Pen","Pencil");
    $arr3 = array("Pen","Chalk");
    $arr4 = array("Pencil","Pen");
    $arr5 = array("Pen","Pencil","book");
    

    //array_diff checks which element of array as first parameter is not in second paramreter.
    $diff1 = array_diff($arr1,$arr2);
    $diff2 = array_diff($arr1,$arr3);
    $diff3 = array_diff($arr1,$arr4);
    $diff4 = array_diff($arr3,$arr4);

    $diff5 = array_diff($arr1,$arr5);    //Checks which element of arr1 is not in arr5.
    $diff6 = array_diff($arr5,$arr1);    //'book' of arr5 is not in arr1, so 'book' is the diff.

    print_r($diff1);
    echo"<br>";
    print_r($diff2);
    echo"<br>";
    print_r($diff3);
    echo"<br>";
    print_r($diff4);
    echo"<br>";
    print_r($diff5);
    echo"<br>";
    print_r($diff6);

?>