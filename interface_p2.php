<?php
    interface shape{
        function area();
        function circum();
    }
    abstract class dimensions implements shape{
        protected $no_of_dimens, $dimens1, $dimens2, $shape;
        function __construct(){
            $this->no_of_dimens = func_num_args() - 1;
            $this->dimens1 = func_get_arg(1);
            $this->shape = "circle";
            if ($this->no_of_dimens == 2):
                $this->dimens2 = func_get_arg(2);
                $this->shape = "rect";
            endif;
        }
    }
    class calc extends dimensions{
        function area(){
            $circle_area = $this->dimens1 * $this->dimens1 * 3.14;
            $rect_area = $this->dimens1 * $this->dimens2;
            return ($this->shape == "circle")? $circle_area : $rect_area;
        }
        function circum(){
            $circle_circum = $this->dimens1 * 3.14 * 2;
            $rect_perimeter = 2 * ($this->dimens1 +$this->dimens2);
            return ($this->shape == "circle")? $circle_circum : $rect_perimeter;
        }
        function showdata(){
            echo "<h3>Shape: $this->shape";
            echo "<h3>Area : ". $this->area(). " cm<sup>3</sup>";
            echo "<h3>Circumferance : ".$this->circum()." cm<sup>2</sup><hr>";
        }
    }
    
    $s1 = new calc(1,7);
    $s2 = new calc(2,10,6);
    $s1->showdata();
    $s2->showdata();
    
    