<?php
$API_SO1_temp1 = json_decode(file_get_contents('https://api.mcsrvstat.us/2/play.tyrolium.fr'));

$API_SO1 = [
    "id" => "SO1",
    "title" => "Server Minecraft TyroServ",
    "description" => "The Official TyroServ Server Minecraft / cauldron 1.7.10",
    "api" => $API_array = [
        "online" => $API_SO1_temp1->online,
        "hostname" => $API_SO1_temp1->hostname,
        "ip" => $API_SO1_temp1->ip,
        "port" => $API_SO1_temp1->port,
        "version" => $API_SO1_temp1->version,
        "motd" => $API_SO1_temp1->motd->raw['0'],
        "website" => "http://tyroserv.fr",
        "player" => $player_array = [
            "online" => $API_SO1_temp1->players->online,
            "max" => $API_SO1_temp1->players->max,
        ]
    ]
];

header('Content-type: application/json');
echo json_encode($API_SO1);
?>