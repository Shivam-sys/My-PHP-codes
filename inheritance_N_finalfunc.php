<?php
    class Emp{
        private $name, $salary;
        // function change_name($new_name){
        //     $this->name = $new_name;
        //     echo "<br><h2>The new name is : $this->name </h2>";
        // }
        final function change_sal($new_sal){    //final keyword restricts a function to be changed in further extended classes.         WE CANNOT REDEFINE/OVERRIDE A FINAL FUNCTION.
            $this->salary = $new_sal;
            echo "<br><h2>The new salary is : $this->salary </h2>";
        }
    }
    class Manager extends Emp{
        function change_name($new_name){
            $this->name = $new_name;
            echo "<br><h2>The new name changed by manager is : $this->name";
        }
        function show(){
            echo "Name: $this->name";
        }
        /*function change_sal($new_sal){       //here error is occured due to final keyword used in same function inside parent class.
            $this->salary = $new_sal;
            echo "<br><h2>The new salary changed by manager is : $this->salary </h2>";
        }*/
    }

    $e1 = new Manager;
    $e1->change_name("ACB");
    $e1->change_sal(10000);
    $e1->show();
    // $e2 = new Emp;
    // $e2->change_name("XYZ");
    // $e2->change_sal(200000);