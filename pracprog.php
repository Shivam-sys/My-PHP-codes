<?php
    function promotion(){
        static $initial_sal = 1000;
        $initial_sal += round($initial_sal/10);
        echo "<br>New salary : ₹$initial_sal";
    }

    promotion();
    promotion();
    promotion();
    promotion();
?>