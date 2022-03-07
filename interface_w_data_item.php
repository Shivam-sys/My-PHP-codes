<?php
    interface inf1{
        const section = "DE851";
        function init($sect);
        function show();
    }
    class cls1 implements inf1{
        function init($s){
            // inf1::section = $s;  //can't modify const value
            echo "<h1><br>The method init exeuted<bR>";
        }
        function show(){
            echo "Section: ".inf1::section;
        }
    }

    $c1= new cls1();
    $c1->init(4444);
    $c1->show();

    