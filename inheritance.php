<?php
    class appointment{
        protected $date,$month;
        private $P_name,$P_id,$Department;
        function makeAppoitment($d,$m,$pname,$pid,$dept){
            $this->date = $d;
            $this->month = $m;
            $this->P_name = $pname;
            $this->P_id = $pid;
            $this->Department = $dept;
        }
        function showAppointment(){
            echo "<b>Appointment Date: $this->date / $this->month</b>";
            echo "<br>Patient ID: $this->P_name";
            echo "<br>Patient Name: $this->P_id";
            echo "<br>Department: $this->Department <hr>";
        }
    }
    class cardiac extends appointment{
        private $CD_id,$CD_name;
        function setdoc1($i,$n){
            $this->CD_id = $i;
            $this->CD_name = $n;
        }
    }
    class ent extends appointment{
        private $ED_id,$ED_name;
        function setdoc2($i,$n){
            $this->ED_id = $i;
            $this->ED_name = $n;
        }
    }

    class reschedule extends appointment{
        function changeDate($d,$m,$obj){
            $obj->date = $d;
            $obj->month = $m;
        }
    }

    $C_doc = new cardiac();
    $C_doc->setdoc1("C1","Dr. Shivam");
    $E_doc = new ent();
    $E_doc->setdoc2("E1","Dr. Ravi");
    
    $app1 = new appointment();
    $app1->makeAppoitment(20,2,"raju","p1","cardiac");
    $app2 = new appointment();
    $app2->makeAppoitment(18,5,"pawan","p2","ent");

    echo "<h3>Initial data </h3><hr>";
    $app1->showAppointment();
    $app2->showAppointment();

    #rescheduling date using object as parameter
    $res = new reschedule();
    $res->changeDate(22,3,$app1);
    $res->changeDate(13,4,$app2);

    echo "<h3>Changed data </h3><hr>";
    $app1->showAppointment();
    $app2->showAppointment();