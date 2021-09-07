<?php
try{
    $API_SO1_temp1 = json_decode(file_get_contents('https://12321.12312.2131.213'), false, 512, JSON_THROW_ON_ERROR);
}catch(\JsonException $e){
    echo "zaea";
}
var_dump($API_SO1_temp1)
?>