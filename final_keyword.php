<?php
    class Manager{
        private $target_achieved;
        public $target_date;
        function target_notify(){
            $this->target_achieved = TRUE;
            echo "<br>Achieved the target!";
        }
        final function target_assign($date){
            $this->target_date = $date;
            echo "<br>Target date $this->target_date ";
        }
        final function target_update($new_date){
            $this->target_date = $new_date;
            echo "<br>Target date updated to $new_date";
        }
    }
    class manufacture extends Manager{
        function target_notify(){
            $this->target_achieved = TRUE;
            echo "<br>Target date - ". $this->target_date;
            echo "<br>Target achived by Manufacture dept.";
        }
    }
    class packaging extends Manager{
        function target_notify(){
            $this->target_achieved = TRUE;
            echo "<br>Target date - ".$this->target_date;
            echo "<br>Target achieved by Packaging dept.";
        }
    }

    $mng = new Manager();
    $mng->target_assign("10 Nov 2021");
    $mng->target_update("20 Nov 2021");
    $mnf = new manufacture();
    $mnf->target_notify();
    $pck = new packaging();
    $pck->target_notify();

