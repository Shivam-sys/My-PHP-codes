<?php
    $con = new mysqli($host,'root','','shop_db');
    $qry = "SELECT * from $tbname";
    $r = $con->query($qry);
    echo "<table border=1>";
    echo "<tr><th>sID</th><th>item</th><th>no of Item</th><th>price</th></tr>";
    while($res = mysqli_fetch_array($r)){
        echo "<tr>";
        echo "<td>".$res['sID']."</td>";
        echo "<td>".$res['item']."</td>";
        echo "<td>".$res['noOfItem']."</td>";
        echo "<td>".$res['price']."</td>";
        echo "</tr>";
    }
    