<?php
    $i = 1;
    while($i<=10){
        echo $i."  ";
        $i++;
    }
    echo "<hr>\nLoop with endwhile: ";
    while($i<=20):
        echo $i."  ";
        $i++;
    endwhile;
    echo "<hr>\nLoop with break: ";
    while($i<=30){
        if($i==26):
            break;
        endif;
        echo $i."  ";
        $i++;
    }
    
$i=0;
$j=0;
while($i<10){
    while($j<10){
        echo "<br> i=".$i;
        if($j == 7){
            break;
        }
        echo "and j =".$j;
        $j++;
    }
    $i++;
}
echo"<h2>{$i}, {$j}</h2>";
echo"<hr>";
$i=0;
$j=0;
while($i<10){
    while($j<10){
        echo "<br> i=".$i;
        if($j == 7){
            break 2;    #this will break 2 loops.
        }
        echo "and j =".$j;
        $j++;
    }
    $i++;
}
echo"<h2>{$i}, {$j}</h2>";