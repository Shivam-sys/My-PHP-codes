<?php
    include "calcBox.php";
    $h = 10;
    $w = 15;
    $l = 20;
    echo "<h2>Area of the box: ".boxArea($h,$w,$l)." cm. sq.";
    echo "<br>Volume of the box: ".boxVolume($h,$w,$l)." cm. cu.";
    echo "</h2>";
?>