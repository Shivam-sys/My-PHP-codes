<?php
    $con = new mysqli('localhost:3308','root','','shop_db');
    $qry = "SELECT * from sales_entries";
    $result = $con->query($qry);
    echo "<hr><h3>First way: <br></h3>";
    while($row = $result->fetch_array(MYSQLI_NUM)){
        //Converting results into numeric array.
        echo "<h4>";
        printf("%s %s %s %s",$row[0],$row[1],$row[2],$row[3]);
    }
    echo "</h4><hr>";
    