<?php
    try{   
        for($i = 1; $i<10; $i++){
            echo "hi: $i <br>";
            if($i>=5){
                throw new exception("Loop executed more than 5 times.");
            }
        }
    }
    catch (exception $e){
        echo $e->getMessage();
    }
?>
