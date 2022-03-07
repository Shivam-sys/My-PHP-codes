<?php
    $a = array();
    for ($i=1;$i<=80;$i++){
    $a[$i] = $i;
  }

  for($i=0;$i<10;$i++){
      echo "<br>Group ".(int)($i+1) ." : ";
      $temp = array_slice($a,(($i*8)+0),(($i*8)+8));
      for($j=0;$j<8;$j++){
          echo $temp[$j]." ,";
      }
  }