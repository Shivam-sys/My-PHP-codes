<?php
    class Bill{
        public static $store_title = "ABC Shop",$Branch = "Urban", $city = "Dehradun";
        public $date,$time,$Payment_status,$item_count,$total_amount;
        function __construct($no_of_items,$amount){
            $this->item_count = $no_of_items;
            $this->total_amount = $amount;
        }

        function payment_st($st){
            $this->Payment_status = $st;
            echo "<h3>Payment status: $this->Payment_status <hr>";
        }
        function showBill(){
            echo "<h2>".Bill::$store_title;
            echo "<h3>".Bill::$Branch;
            echo "<h3>".Bill::$city;
            echo "<h4>Item count: ".$this->item_count;
            echo "<h4>Total Amount: ".$this->total_amount;
        }
    }

    $bill1 = new Bill(5,1000);
    $bill1->showBill();
    $bill1->payment_st("PAID");
    $bill2 = new Bill(4,2000);
    $bill2->showBill();
    $bill2->payment_st("NOT PAID");