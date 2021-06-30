<?php  
header('Access-Control-Allow-Origin: *');
$headers = "From: from@webhookservesite.ru";
$message = print_r($_POST,true);
@mail('rgkenga@yandex.ru', 'Tilda TEST', $message, $headers);
echo "test";
?>
