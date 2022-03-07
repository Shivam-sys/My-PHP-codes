<?php
    $book = array();
    $book['PHP'] = array('title'=>'PHP Programming',
                         'author'=>'Author1',
                         'price'=>400,
                         'pages'=>200);
    $book['JAVA'] = array('title'=>'JAVA Programming',
                         'author'=>'Author2',
                         'price'=>500,
                         'pages'=>350);
    $book['C++'] = array('title'=>'C++ Programming',
                         'author'=>'Author3',
                         'price'=>350,
                         'pages'=>250);
    $book['C'] = array('title'=>'C Programming',
                         'author'=>'Author4',
                         'price'=>370,
                         'pages'=>199
                        );
    
    echo "<br>Title of C: ".$book['C']['title'];
    echo "<br>Author of PHP: ".$book['PHP']['author'];
    echo "<br>Price of JAVA: ".$book['JAVA']['price'];
    echo "<br>Pages of C++: ".$book['C++']['pages'];
    
    // Printing all Array elements

    foreach($book as $key => $val){
            echo "<hr><h3>".$key."</h3>";
            foreach($val as $k => $v){
                echo "<h4>".$k." --> ".$v."</h4>";
            }
    }