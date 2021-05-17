<?php

// header('Access-Control-Allow-Origin: http://localhost:4200');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Authorization, Accept, Client-Security-Token, Accept-Encoding');
header('Access-Control-Max-Age: 1000');  
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE, PUT');




$postdata = file_get_contents("php://input");

$request = json_decode($postdata);

$data = [];

foreach ($request as $k => $v){
    $temp = "$k => $v";
    $data[0]['post_'.$k] = $v;
}

$current_date = data("Y-m-d");

echo json_encode(['content'=>$data, 'response_on'=>$current_data]);
?>