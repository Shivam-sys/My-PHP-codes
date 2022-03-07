<?php
    function show(&$grades){
        echo "Current grade: $grades";
    }
    function rectify(&$grades,$newg){
        $grades = $newg;
        notify($grades);
    }
    function notify(&$grades){
        echo "Updated grade: $grades";
    }

    $grades = "B+";
    show($grades);
    echo "<br>";
    rectify($grades,"A+");
?>