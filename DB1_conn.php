<?php
    $con = new mysqli("localhost:3308","root","","mydb");
    //-------- -->" HOST NAME:port", "USERNAME","Password","DB Name"

    if($con ->connect_errno){
        echo "<p><br><h1>There is some issue in connection";
        echo "<br>Error message: ". $con->connect_error;
        echo "<br>Error number: ". $con->connect_errno;
        exit();
    }
    else{
        echo "Connected successfully";
    }
?>