<?php
    echo "<h1>isset() method in PHP</h1>";
    $x;
    $y;
    function takesTwo($a,$b){
        $x = $a;
        $y = $b;
        echo "<br>".((isset($x))?"X is set.":"X is not set");
        echo "<br>".((isset($y))?"Y is set.":"Y is not set");
    }
    echo "<h2>First function call: <br>";
    takesTwo(1,2);
    ?>