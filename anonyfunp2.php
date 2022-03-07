<?php
    $action = array(
        function($color){
        if ($color == "red"){
            return "stop";
        }
    },
    function($color){
        if ($color == "yellow"){
            return "Wait";
        }
    },
    function($color){
        if ($color == "green"){
            return "Go";
        }
    }
);

    echo $action[0]("red");