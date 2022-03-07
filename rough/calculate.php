<?php
    function cal_hr(){
        $salary = $_POST['salary'];
        global $hr;
        $hr = $salary*0.16;
        return $hr;
    }
    function cal_eb(){
        $salary = $_POST['salary'];
        global $eb;
        $eb = $salary*0.09;
        return $eb;
    }
    function cal_cl(){
        global $cl;
        $cl = $salary*0.08;
        $salary = $_POST['salary'];
        return $cl;
    }
    function cal_exp(){
        $salary = $_POST['salary'];
        global $exp;
        $exp = $salary - $hr - $eb - $cl;
        return $exp;
    }
?>
