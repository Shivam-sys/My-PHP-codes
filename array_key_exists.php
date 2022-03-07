<!-- //Check wether a key exists or not. -->
<?php
    $arr = array("Key1"=>"val1","Key2"=>"val2","Key3"=>"val3");
//FIRST WAY

if ($arr['Key1']){
    echo "Key exists.";
}
else {
    echo "Key doesn't exists.";
}
//SECOND WAY
if(array_key_exists("Key1",$arr)){
    echo "<br>Key exists.";
}
else echo "<br>Key doesn't exists.";

//THIRD WAY
if (isset($arr['Key4'])){
    echo "<br>Key exists.";
}
else {
    echo "<br>Key doesn't exists.";
}
