<?php
    function reg(){
        if(func_num_args()==3){
            echo "<h3>Reg. no. : ".func_get_arg(1);
            echo "<h3>Name : ".func_get_arg(0);
            $fee_st = (func_get_arg(2)===TRUE)?"Cleared":"Not cleared";
            echo "<h3>Fee status: $fee_st";
            if($fee_st === "Cleared"){
                echo "<h2>Admission Granted!";
            }
            else {
                echo "<h2>Admission not Granted!";
            }
        }
    }
    reg("Shivam","11929111",FALSE);