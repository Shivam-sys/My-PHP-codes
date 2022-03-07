<?php
    class Box{
        public $height,$width,$length;
        function __construct($h,$w,$l){
            $this->height = $h;
            $this->width = $w;
            $this->length = $l;
        }

        function showBox(){
            echo "<br><h2>Height: ".$this->height;
            echo "<br>Width: ".$this->width;
            echo "<br>Length: ".$this->length;
        }
    }

    $obj = new Box(23,34,45);   //Constructor with params, PARAMETERIZED CONSTRUCTOR
    $obj->showBox();