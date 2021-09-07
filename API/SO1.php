<?php
$API_SO1_temp1 = json_decode(file_get_contents('https://api.mcsrvstat.us/2/play.tyrolium.fr'));
$API_SO1 = $API_SO1_temp1->online;

$API_SO1_Array = [
    "title" => "Server Minecraft TyroServ",
    "description" => "The Official TyroServ Server Minecraft / cauldron 1.7.10",
    "result" => $API_SO1,
];

header('Content-type: application/json');
echo json_encode($API_SO1_Array);
?>