<?php
    $a = 10;
    $b = 20;
    echo "<h1>Increament</h1>";
    echo "<h2>Post increament</h2>";
    echo "original value of a: $a";
    echo "<br>current value of a on post increament :" . $a++;
    echo "<br>Value of a after post increament: $a";
    echo "<h2>Pre increament</h2>";
    echo "original value of b: $b";
    echo "<br>current value of b on pre increament : ".++$b;
    echo "<br>Value of b after pre increament: $b";
    echo "<h1>Decreament</h1>";
    echo "<h2>Post decreament</h2>";
    echo "original value of a: $a";
    echo "<br>current value of a on post decreament : ".$a--;
    echo "<br>Value of a after post decreament: $a";
    echo "<h2>Pre decreament</h2>";
    echo "original value of b: $b";
    echo "<br>current value of b on pre decreament : ".--$b;
    echo "<br>Value of b after pre decreament: $b";
?>