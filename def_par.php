<?php

function box ($h, $w=9, $l=10){
echo "$h,";
echo "$w,";
echo "$l";
}

echo "<br> first box: ";
box (10, 20, 30);
echo "<br> second box: ";
box (30,40);
echo "<br> third box:";
box(55);
?>