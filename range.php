<?php
    $numbers = range(10,17);    //from 10 to 17, both included
    $letters = range('a','j');   //alphabets , both chars included, accoring to ASCII.
    $reversedNumbers = range(9,2);   //reversed numbers , both included
    $strrange = range("ana","cat");// displays alphabets between first letters of both arguments. both included

    var_dump($numbers);
    echo "<br>";
    var_dump($letters);
    echo "<br>";
    var_dump($reversedNumbers);
    echo "<br>";
    var_dump($strrange);