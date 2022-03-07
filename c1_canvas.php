<?php   
    $image = imagecreate(500,600);
    $clr1 = imagecolorallocate($image,155,155,255);
    $clr2 = imagecolorallocate($image,200,100,100);
    imagefilledrectangle($image,150,150,350,350,$clr2);
    header("Content-Type: image/png");
    imagepng($image);
?>