<?php
    $i=2;
    while($i<10){
        $j=1;
        while ($j<20){
            echo "$i x $j= ". $i*$j."<br>";
            if ($j==10){
                break 2;
            }
            $j++;
        }
        $i++;
    }

// $i=2;
// $j=1;
//     while($i<10){
//         while ($j<20){
//             echo "$i x $j= ". $i*$j."<br>";
//             if ($j==10){
//                 break 2;
//             }
//             $j++;
//         }
//         $i++;
//     }