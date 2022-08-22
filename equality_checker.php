<?php
error_reporting(E_ERROR | E_WARNING);
header("Content-Type: application/json");

$param1 = $_GET['param1'];
$param2 = $_GET['param2'];

if(empty($param1) or empty($param2)){
    # { "error": true }
    $array = array(
        "error"=> true
    );
    echo json_encode($array, true);
}else{
    if($param1 !== $param2){
        # { "error": false, "result": false }
        $array = array(
            "error"=> false,
            "result"=> false
        );
        echo json_encode($array, true);
    }else{
        # { "error": false, "result": true }
        $array = array(
            "error"=> false,
            "result"=> true
        );
        echo json_encode($array, true);
    }
}