<?php
    interface inf1{
        function f1();
    }
    interface inf2{
        function f2();
    }
    class cls1{
        function f3(){
            echo "<h3>Hello! I am function 3";
        }
    }
    class cls2 extends cls1 implements inf1,inf2{
        function f1(){
            echo "<h3>Hello! I am function 1";
        }
        function f2(){
            echo "<h3>Hello! I am function 2";
        }
    }
    
    $obj1 = new cls2();
    $obj1->f1();
    $obj1->f2();
    $obj1->f3();