<?php   
    echo "<b>Using array_splice(\$input,2)</b> ";
    $input = array("red","green","blue","yellow");
    array_splice($input,2);
    var_dump($input);
    echo "<hr>";

    echo "<b>Using array_splice(\$input,1,-1)</b> ";
    $input = array("red","green","blue","yellow");
    array_splice($input,1,-1);
    var_dump($input);
    echo "<hr>";

    echo "<b>Using array_splice(\$input,1,count(\$input),\"orange\")</b> ";
    $input = array("red","green","blue","yellow");
    array_splice($input,1,count($input),"orange");
    var_dump($input);
    echo "<hr>";

    echo "<b>Using array_splice(\$input,-1,1,array(\"black\",\"maroon\"));</b> ";
    $input = array("red","green","blue","yellow");
    array_splice($input,-1,1,array("black","maroon"));
    var_dump($input);
    echo "<hr>";
?>