<?php
    $randomval = function($min,$max){
        return rand($min,$max);
    };
    $calc = array(
        function ($v1,$v2){
            echo "<h2>Sum: ".($v1+$v2);
        },
        
        function ($v1,$v2){
            echo "<h2>Difference: ".($v1-$v2);
        },
        
        function ($v1,$v2){
            echo "<h2>Product: ".($v1*$v2);
        }
    );
    $choice = rand(0,2);

    $calc[$choice] ($randomval(10,20),$randomval(1,10));