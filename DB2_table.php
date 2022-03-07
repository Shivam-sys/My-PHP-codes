<?php   
    $con = new mysqli("localhost:3308","root","","mydb");
    if($con->connect_errno){
        echo "There is some issue in connection.<br>";
        echo "Error: ".$con->connect_error;
        echo "Error code: ".$con->connect_errno;
        exit();
    }
    else{
        echo "Connected successfully<br>";
    }
    
    $qry = "Create table table1(col1 INT, col2 TEXT, col3 varchar(20), col4 varchar(10))";

    if($con->query($qry) === TRUE){
        echo "Success<br>";
    }
    else {
        echo "Issue: ". $qry ."<br>".$con->error;
    }
    $con->close();
    ?>
    