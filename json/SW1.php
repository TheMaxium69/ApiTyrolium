<?php
$API_SW1 = [
    "id" => "SW1",
    "title" => "Tyrolium.fr",
    "description" => "The Official Tyrolium Website",
    "api" => $API_array = [
        "online" => true,
        "hostname" => "https://tyrolium.fr",
    ]
];

header('Content-type: application/json');
echo json_encode($API_SW1);
?>