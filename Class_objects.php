<?php
    class student{
        public $name,$age;
        function setData($name,$age){
            $this->name = $name;
            $this->age = $age;
        }
        function getData(){
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