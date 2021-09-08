<?php
$API_SW3 = [
    "id" => "SW3",
    "title" => "Site.Wonderlium.yt",
    "description" => "The Official Wonderlium Website",
    "api" => $API_array = [
        "online" => true,
        "hostname" => "http://site.wonderlium.yt",
    ]
];

header('Content-type: application/json');
echo json_encode($API_SW3);
?>