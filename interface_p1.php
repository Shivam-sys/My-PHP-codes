<?php
    interface shape{
        function area();
        function circum();
    }
    class square implements shape{
        private $side;
        function __construct($s){
            $this->side = $s;}
        function area(){
            return (int)($this->side) * (int)($this->side);}
        function circum(){
            return (int)($this->side) * 4;}
        function showdata(){
            echo "<h3>Side : $this->side";
            echo "<h3>Area : ". $this->area(). " cm<sup>3</sup>";
            echo "<h3>Perimeter : ".$this->circum()." cm<sup>2</sup><hr>";
        }
    }
    class circle implements shape{
        private $rad;
        function __construct($r){
            $this->rad = $r;}
        function area(){
            return (int)($this->rad) * (int)($this->rad) * 3.14;}
        function circum()
        {return (int)($this->rad) * 3.14 * 2;}
        function showdata(){
            echo "<h3>Radius : $this->rad";
            echo "<h3>Area : ". $this->area(). " cm<sup>3</sup>";
            echo "<h3>Circumferance : ".$this->circum()." cm<sup>2</sup><hr>";
        }
    }
    
    $s1 = new square(10);
    $c1 = new circle(7);
    $s1->showdata();
    $c1->showdata();
    
    