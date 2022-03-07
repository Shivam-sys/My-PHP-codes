<?php
    $con = new mysqli('localhost:3308','root','','shop_db');
    $qry = "DELETE from sales_entries where sID=1";
    $result = $con->query($qry);
    if ($result){
        echo "Success";
    }
    else{
    echo "Some Issue";  
    }

    $con->close();
    ?>