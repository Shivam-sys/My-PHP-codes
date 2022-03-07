<?php
    $arr1 = array('pen','pencil','book');
    unset($arr1[2]);
    var_dump($arr1);
    $arr2 = array('name'=>'shivam', 'gender'=>'male', 'age'=>18);
    unset($arr2['age']);
    var_dump($arr2);