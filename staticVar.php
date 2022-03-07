<?php
    function add_item($itemName, $itemCode, $price){
        echo "<br>Item Code: $itemCode";
        echo "<br>Item Name: $itemName";
        echo "<br>Price : $price";
        total($price);
    }

    function total($amount){
        static $total = 0;
        $total += $amount;
        echo "<br>Bill: $total<hr>";
    }

    add_item("Book","Bk101",300);
    add_item("Copy","Cp102",150);
    add_item("Pen","Pp33",20);