<?php
    function add($a,$b){
        return $a+$b;
    }
    function subt($a,$b){
        return $a-$b;
    }
    function mul($a,$b){
        return $a*$b;
    }
    function div($a,$b){
        return $a/$b;
    }

    $func = "add";
    echo "<h3>Sum: ".$func(10,20)."<br>";
    $func = "subt";
    echo "Diff: ".$func(20,10)."<br>";
    $func = "mul";
    echo "Product: ".$func(10,20)."<br>";
    $func = "div";
    echo "Quotient: ".$func(20,10)."<br>";
?>
    
    