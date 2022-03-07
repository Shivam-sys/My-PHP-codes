<?php
    $uid = $_POST["uid"];
    $name = $_POST["name"];
    if(strlen($uid)==6){
        if (substr($uid,0,1)=='F'){
            echo "Hello $name, You are a Faculty!<br>";
            echo "Welcome to LPU!";
        }
    }
    else if(strlen($uid)==9){
        if (substr($uid,0,1)=='S'){
            echo "Hello $name, You are a student!<br>";
            echo "Welcome to LPU!";
        }
    }
    else if(strlen($uid)==11){
        if (substr($uid,0,1)=='E'){
            echo "Hello $name, You are a Employee!<br>";
            echo "Welcome to LPU!";
        }
    }
    else{ 
        echo "Hello $name, Please re-enter uid!<br>";
        echo "No data found";
    }
?>