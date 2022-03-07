<?php

$exam_cen_code = "C123";
    function candidate1($name,$adharNo, $contact, $emailId){
        global $exam_cen_code;
        echo "<h2>Candidate 1 details: </h2>";
        echo "<br>Name:$name";
        echo "<br>Adhar: $adharNo";
        echo "<br>contact: $contact";
        echo "<br>emailId: $emailId";
        echo "<br>Exam center code: $exam_cen_code"; 
    }
    function candidate2($name,$adharNo, $contact, $emailId){
        global $exam_cen_code;
        echo "<br><h2>Candidate 2 details</h2>";
        echo "<br>Name:$name";
        echo "<br>Adhar: $adharNo";
        echo "<br>contact: $contact";
        echo "<br>emailId: $emailId";
        echo "<br>Exam center code: $exam_cen_code"; 
    }

    
    candidate1("Shivam Kumar", "2937445","573928405","ee123@fjf.com");
    candidate2("Mohan Das","384754","84858934","Nrg@jdu.com");
    ?>
