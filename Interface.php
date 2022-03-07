<!-- Interface is a class type of entity -->
<!-- Interface never define their function. All function inside an interface are only declared and none of them is defined. -->
<!-- We use keyword " interface" instead of "class" while declaring the interface. 
    interface abc{

    }
-->

<!-- For inheritance we use "implements" keyword, instead of "extends"
    lass xyz implements abc{
        ...
    }
-->
<!-- The class implementing an interface has to define all the methods of the interface. -->

<?php
    interface Intf1{
        function someTask1();
        function someTask2();
        function someTask3();
    }

    class cls1 implements Intf1{
        function someTask1(){
            echo "<br>This is cls1 and task1";
        }
        function someTask2(){
            echo "<Br>This is cls1 and task2";
        }
        function someTask3(){
            echo "<br>This is cls1 and task3<hr>";
        }
    }
    class cls2 implements Intf1{
        function someTask1(){
            echo "<br>This is cls2 and task1";
        }
        function someTask2(){
            echo "<Br>This is cls2 and task2";
        }
        function someTask3(){
            echo "<br>This is cls2 and task3<hr>";
        }
    }

    
    $cl1 = new cls1();
    $cl1->someTask1();
    $cl1->someTask2();
    $cl1->someTask3();
    $cl2 = new cls2();
    $cl2->someTask1();
    $cl2->someTask2();
    $cl2->someTask3();
