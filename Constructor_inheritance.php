<?php
    class person {
        private $name, $age, $addr;
        function __construct($n,$a,$ad){
            $this->name =$n;
            $this->age = $a;
            $this->addr = $ad;
        }
        function showDetails(){
            echo "<br>Name: ".$this->name;
            echo "<br>Age: ".$this->age;
            echo "<br>Address: ".$this->addr;
        }
    }

    class Employee extends person{
        private $salary;
        function __construct($n,$a,$ad,$s){
            parent::__construct($n,$a,$ad);
            $this->salary = $s;
        }
        function showEmp(){
            echo "<br>Salary: ".$this->salary;
        }
    }
    $emp = new Employee("Shivam","20","Punjab",10000);
    $emp->showDetails();
    $emp->showEmp();