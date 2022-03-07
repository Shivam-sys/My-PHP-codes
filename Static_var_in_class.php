<?php   
    class Person{
        public static $batch = 2018;
        public $name,$rno;

        function __construct($name,$rno){
            $this->name=$name;
            $this->rno=$rno;
        }        
    }

    class student extends Person{
        public static $batch = 2019;
        private $lang;
        function __construct($name,$rno,$lang){
            $this->lang = $lang;
            Person::__construct($name,$rno);
            self::$batch = 2020;
        }
        function showDetails(){
            echo "<h3>Name: $this->name";
            echo "<h3>Roll: $this->rno";
            echo "<h3>Language: $this->lang";
            echo "<h3>Batch: ".self::$batch;
        }
    }

    $std = new student("Shivam",100,"Python");
    $std->showDetails();
    echo "<h1>Batch: ".Person::$batch;