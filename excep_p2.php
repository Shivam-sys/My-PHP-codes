<?php
    $age = 29;
    $min_invest = 1000000;
    try {
        if($age > 30 && $min_invest>=1000000)
            die("<h2>Your liscence is granted!</h2>");
        throw new exception("<h2>Requirements not matched!</h2>");
    }
    catch(exception $e){
        echo $e->getMessage();
    } 
?>