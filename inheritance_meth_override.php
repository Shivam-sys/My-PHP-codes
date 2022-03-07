<?php
    class pet{
        public $color;
        public $age;
        function setData($c,$a){
            $this->color = $c;
            $this->age = $a;
        }
        function getData(){
            echo "<br>My color is $this->color<br>";
            echo "My age is $this->age.<br>";
        }
        function eat(){
            echo "<br><i>Hello! I am eating!</i><br>";
        }
    }
    class dog extends pet{
        private $sound;
        public function setData2($sound){
            $this->setData("Black",5);
            $this->sound = $sound;
        }
        public function bark(){
            echo "I am a dog!";
            echo "<br><i>$this->sound ! $this->sound !</i>";
        }
        public function setData($c,$a){  //method overriding
            $this->color = $c;
            $this->age = $a;
        }
    }

    $tommy = new dog();
    $tommy->setData("Maroon",6);
    $tommy->getData();
    $tommy->setData2("Woof");
    $tommy->bark();
    $tommy->eat();