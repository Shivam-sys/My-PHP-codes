<?php
    function add_item($itemName, $itemCode, $price){
        static $serial_no = 0;
        echo "<br>".++$serial_no."> Item Code: $itemCode";
        echo "<br>Item Name: $itemName";
        echo "<br>Price : $price";
        total($price);
    }

    function total($amount){
        global $final_amt;
        static $total = 0;
        $total += $amount;
        echo "<br>Bill: $total<hr>";
        $final_amt = $total;
    }

    add_item("Book","Bk101",300);
    add_item("Copy","Cp102",150);
    add_item("Pen","Pp33",20);
    echo "Final Bill: $final_amt";
?>