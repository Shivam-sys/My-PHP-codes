<?php
    echo "Converting between arrays and variables<br>";
    echo "Creating array from variables";

    $color = "Indigo";
    $shape = "Curvy";
    $floppy = "none";

    $a = compact("color","shape","floppy");
    var_dump($a);

    $names = array("color","shape","floppy");
    $b = compact($names);
    var_dump($b);
    ?>