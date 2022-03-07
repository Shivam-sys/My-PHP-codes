<?php
    class Employee{
        public $name,$date_of_join,$experience,$previous_employer;
        function punchDetails($name,$doj,$exp,$prev_emp){
            $this->name = $name;
            $this->date_of_join = $doj;
            $this->experience = $exp;
            $this->previous_employer = $prev_emp;
        }
        function fetchDetails(){
            return "Name: $this->name <br>Age: $this->age <hr>";
        }
    }

    $s1 = new student();
    $s2 = new student();
    $s3 = new student();

    $s1->setData('Shivam',20);
    $s2->setData('Sanju',18);
    $s3->setData('Ravi',21);

    echo $s1->getData();
    echo $s2->getData();
    echo $s3->getData();