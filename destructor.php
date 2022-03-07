<?php
    class Person{
        public $name, $address,$age;
        function __construct($name,$add,$age){
            $this->name = $name;
            $this->address = $add;
            $this->age = $age;
        }
        function showData(){
            echo "<br>Name: $this->name";
            echo "<br>Address: $this->address";
            echo "<br>Age: $this->age";
        }
        function __destruct(){
            echo "<br> Object Destructed: $this->name";
        }
    }

    $human1 = new Person("ONE","Add1",20);
    echo $human1->showData()."<hr>";
    $human2 = new Person("TWO","Add2",30);
    echo $human2->showData()."<hr>";
    $human3 = new Person("THREE","Add3",40);
    echo $human3->showData()."<hr>";