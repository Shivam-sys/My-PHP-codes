<?php
    function sumList(){
        if(func_num_args() == 0){
            return false;
        }
        else{
            $count = 0;
            for($i=0; $i < func_num_args(); $i++){
                $count += func_get_arg($i);
            }
            return $count;
        }
    }
    echo "<h2> Sum of parameters: ".sumList(12,23,34,45);
?>
