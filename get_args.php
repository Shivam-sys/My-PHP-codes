<?php
    echo "<h1>Function to fetch the count of args and values passed in a function</h1>";
    function countList(){
        echo "<h2>Number of arguments: ".func_num_args();
        echo "<h2>value of first argument: ".func_get_arg(0);
        echo "<h2>value of second of argument: ".func_get_arg(1);
    }
    countList(12,23);
    ?>