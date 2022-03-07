<?php
    echo "<H1>Exception handelling : try and catch</h1>";
    $age = 107;
    try{
        if($age<18){
            throw new exception("<h2>Underage Not Allowed!</h2>");
            echo "This won't execute";
           }
           echo "<h2>Age : ".$age."</h2>";
        }
    catch(exception $e){
        echo $e->getMessage();
        echo "This line executes only if age <18";
    }
?>
