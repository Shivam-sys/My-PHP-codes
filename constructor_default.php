<?php
    class Box{
        public $height,$width,$length;
        function init($h,$w,$l){
            $this->height = $h;
            $this->width = $w;
            $this->length = $l;
        }

        function showBox(){
            echo "<br>Height: ".$this->height;
            echo "<br>Width: ".$this->width;
            echo "<br>Length: ".$this->length;
        }
    }

    $obj = new Box();   //Constructor without params
    $obj->init(23,34,45); //Default constructor
    $obj->showBox();