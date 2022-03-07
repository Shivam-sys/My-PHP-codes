<?php
    echo "<h1>GOTO statement</h1>";
    sleep(10);
    goto finish; //control transferred to finish
    echo "These statements will be ignored as control never reaches here";
    finish:
        echo "<br>This is a statement inside finish label";
        echo "<br>And this too.";
?>
