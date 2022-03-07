<!-- <?php   
    $image = imagecreate(500,600);
    $clr1 = imagecolorallocate($image,255,255,255);
    $clr2 = imagecolorallocate($image,255,0,0);
    $clr3 = imagecolorallocate($image,0,0,255);
    

    //First figure
    ImageLine($image,100,100,200,100,$clr2);
    ImageLine($image,100,100,100,200,$clr3);
    ImageLine($image,100,200,200,200,$clr2);
    ImageLine($image,200,100,200,200,$clr3);
    ImageLine($image,150,200,100,250,$clr3);
    ImageLine($image,150,200,200,250,$clr3);

    // Second Figure
    ImageLine($image,100,300,200,300,$clr2);
    ImageLine($image,100,300,100,400,$clr3);
    ImageLine($image,100,400,200,400,$clr2);
    ImageLine($image,200,300,200,400,$clr3);
    ImageLine($image,150,300,150,350,$clr2);
    ImageLine($image,150,350,200,350,$clr2);
    
    //Imagearc(image, center_x, center_y, width, height, start , end, color)

    Imagearc($image,150,450,100,100,180,360,$clr3);
    Imagearc($image,150,450,80,80,180,360,$clr2);
    Imagearc($image,150,500,80,150,180,360,$clr3);
    Imagearc($image,150,500,80,130,180,360,$clr3);

    header("Content-Type: image/png");
    imagepng($image);
?> -->

<?php
    $image = imagecreate(400,400);
    $clr1 = imagecolorallocate($image,255,255,255);
    $clr2 = imagecolorallocate($image,255,0,0);
    $clr3 = imagecolorallocate($image,0,0,255);
    $arr = [80,220, 130,100, 160,160, 200,60, 200,150, 350,40, 190,330, 80,200]; //End point should be same as start
    ImagePolygon($image,$arr,7,$clr3); //image, arr, noof vertices, color
    header("Content-Type: image/png");
    imagepng($image);
    ?>