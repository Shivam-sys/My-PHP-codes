<?php
    function show($name,$adhar,$contact,$address,$indian=null,$salary=0,$employer=""){
        echo "<br>".(isset($name)?"Name is <b>Set</b>.":"Name is <b>Not set</b>.");
        echo "<br>".(isset($contact)?"Contact is <b>Set</b>.":"Contact is <b>Not set</b>.");
        echo "<br>".(isset($address)?"Address is <b>Set</b>.":"Address is <b>Not set</b>.");
        echo "<br>".(isset($indian)?"Nationality is <b>Set</b>.":"Nationality is <b>Not set</b>.");
        echo "<br>".(isset($salary)?"Salary is <b>Set</b>.":"Salary is <b>Not set</b>.");
        echo "<br>".(isset($employer)?"Employer is <b>Set</b>.":"Employer is <b>Not set</b>.");
    }
    show("shivam","28283","9988988","punjab");
    echo "<hr>";
    show("Shiva","28999","9994444","haryana","Yes");
    echo "<hr>";
    show("Jack","28444","9994433","delhi","No",null,null);
    echo "<hr>";
    show("David","28433","9994322","delhi",null,0,null);
?>