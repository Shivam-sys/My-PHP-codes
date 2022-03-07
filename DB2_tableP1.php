<?php
    $con = new mysqli("localhost:3308","root","","shop_db");
    if($con->connect_errno){
        echo "There is some issue in connection.<br>";
        echo "Error: ".$con->connect_error;
        echo "Error code: ".$con->connect_errno;
        exit();
    }
    else{
        echo "Connected successfully<br>";
    }

    // $qry = "Create table sales_entries (sID INT, item VARCHAR(20), noOfItem INT, price FLOAT(7,2))";
    
    // if($con->query($qry) === TRUE){
    //     echo "<h2>Table 1 Created!<br>";
    // }
    // else {
    //     echo "<h3>Issue: ". $qry ."<br>".$con->error;
    // }

    // $qry =" Create table staff_details (stID INT, sname VARCHAR(20), age INT)";

    // if($con->query($qry) === TRUE){
    //     echo "<h2>Table 2 Created!<br>";
    // }
    // else {
    //     echo "<h3>Issue: ". $qry ."<br>".$con->error;
    // }

        // $qry = array("insert into sales_entries VALUES(1,'Pen',3,10)",
        //             "insert into sales_entries VALUES(2,'Pencil',5,5.2)",
        //             "insert into sales_entries VALUES(3,'Book',10,270)");
        $qry = array("INSERT into staff_details VALUES(101,'Shivam Kumar',20)",
                    "INSERT into staff_details VALUES(102,'John',22)",
                "INSERT into staff_details VALUES (104,'Ravi',19)");
        // $qry = "DELETE FROM staff_details WHERE stID = 101 OR stID = 102";
        foreach ($qry as $q){
            if($con->query($q)===TRUE){
                echo "<h3>Query processed successfully</h3>";
            }
            else{
                echo "<h3>Issue: ". $qry ."<br>".$con->error;
            }
        }
    $con->close();
    ?>