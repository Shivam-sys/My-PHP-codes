<?php
    class Emp{
        private $name;
    }
    class Manager extends Emp{
        function change_name($new_name){
            $this->name = $new_name;
            echo "<br><h2>The new name changed by manager is : $this->name";
        }
        function show(){
            echo "<h2>Name: $this->name";
        }
    }

    $e1 = new Manager;
    $e1->change_name("ACB");
    $e1->show();