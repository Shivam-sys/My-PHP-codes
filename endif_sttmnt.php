<?php
    $roll = 13;
    if($roll%2 == 0):
        echo "Your roll is even.";
        echo "<br>You are eligible for test.";
    else:
        echo "Your roll is odd.";
        echo "<br>You are not eligible.";
    endif;
    ?>