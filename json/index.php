<?php

require_once "../url.php";

//Service
/*website*/
$SW1 = json_decode(file_get_contents( $url . 'json/SW1.php'));
$SW3 = json_decode(file_get_contents( $url . 'json/SW3.php'));
/*db*/
$SD1 = json_decode(file_get_contents( $url . 'json/SD1.php'));
/*api*/
/*host*/
/*other*/
$SO1 = json_decode(file_get_contents( $url . 'json/SO1.php'));
//Server
//NomDomaine
//Client

$API = [
    "service" => $API_S = [
        "website" => $API_SW = [
            "SW1" => $SW1,
            "SW2" => "",
            "SW3" => $SW3,
        ],
        
        "db" => $API_SD = [
            "SD1" => $SD1,
        ],


        "api" => $API_SA = [

        ],

        "host" => $API_SH = [

        ],

        "other" => $API_SO = [
            "SO1" => $SO1,  
        ],
    ],

    "server" => $API_V = [

    ],

    "nomdomaine" => $API_N = [

    ],

    "client" => $API_C = [

    ]
    
];


header('Content-type: application/json');
echo json_encode($API);
?>
