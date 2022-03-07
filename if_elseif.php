<?php
    $uid = "11917271";
    if(strlen($uid)==5){
        echo "Hello! Faculty.";
        echo "Welcome to LPU!";
    }
    else if(strlen($uid)==8){
        echo "Hello! Student.";
        echo "Welcome to LPU!";
    }
    else if(strlen($uid)==10){
        echo "Hello! Employee.";
        echo "Welcome to LPU!";
    }
    else 
        echo "Check Uid again!";
?>