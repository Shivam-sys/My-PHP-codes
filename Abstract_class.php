<!-- A class which is having atleast one abstract method.
A abstract method is such a function which is only declared inside a class and not defined. It is mandatory for the abstract class to be inherited. -->
<?php
    abstract class cls1{
        abstract function someTask();
    }
    class cls2 extends cls1{
        function someTask(){
            echo "Task by sub class.";
        }
        function show(){
            echo "Hellol, World!";
        }
    }

    $obj = new cls2();
    $obj->someTask();
    $obj->show();

