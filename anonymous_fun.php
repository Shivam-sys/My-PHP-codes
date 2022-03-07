<?php
    $student = function($school,$section){
        return("$school, $section");
    };

    echo "<h2>".$student("school1","section2") . "<br>";
    echo $student("school2","section3") . "<br>";
    ?>