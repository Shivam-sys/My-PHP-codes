<?php
    interface paint{
        function paint_it();
    }
    interface lighting{
        function light_it();
    }
    interface decor{
        function decor_it();
    }
    class draft{
        public $color,$tube,$bulb,$energy,$style;
        function __construct($c,$t,$b,$e,$s){
            $this->color = $c;
            $this->tube =$t;
            $this->bulb =$b;
            $this->energy =$e;
            $this->style =$s;
        }}
    class renovate extends draft implements paint,lighting,decor{
        function paint_it(){
            echo "<h3>Painted it \"$this->color\" ";
        }
        function light_it(){
            echo "<h3>lighted with tube - \"$this->tube\", Bulbs - \"$this->bulb\" , Energy source- \"$this->energy\" ";
        }
        function decor_it(){
            echo "<h3>Decorated with style- \"$this->style\"";
        }   
        function feedback(){
            echo "<h3>All task done!";
        }
    }

    $task1 = new renovate("yellow",10,8,"battery","Italian");
    $task1->paint_it();
    $task1->light_it();
    $task1->decor_it();
    $task1->feedback();

    
    