<?php
require_once "SO1.php";


$API_S = [
    "SO1" => $API_SO1_Array
];





header('Content-type: application/json');
echo json_encode($API_S);
