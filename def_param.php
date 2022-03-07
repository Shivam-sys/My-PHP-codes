<?php
    function mark_att($attendance = "Present"){
        static $num = 1;
        echo "<h2>Student$num is $attendance</h2>";
        $num++;
    }
    mark_att("Absent");
    mark_att("Absent");
    mark_att();
    mark_att();
    mark_att("Absent");
?>
