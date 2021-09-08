<?php
$API_SD1 = [
    "id" => "SD1",
    "title" => "DB Tyrolium.fr",
    "description" => "Data Base stocked 'Nous Contacter' ",
    "api" => $API_array = [
        "online" => true,
    ]
];

header('Content-type: application/json');
echo json_encode($API_SD1);
?>