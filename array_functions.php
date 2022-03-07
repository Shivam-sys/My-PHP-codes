<?php
    $addresses = array("Adr1"=>"Pers1","Adr2"=>"Pers2","Adr3"=>"Pers3","Adr4"=>"Pers4");
    var_dump($addresses);
    reset($addresses);
    var_dump($addresses);

    while (list($key,$value) = each($addresses)){
        echo "{$key} is {$value} <br />\n";
    }

    //half done