<?php  
header('Access-Control-Allow-Origin: *');
$headers = "From: from@webhookservesite.ru";
$message = print_r($_POST,true);
@mail('anton.strobe@gmail.com', 'Tilda TEST', $message, $headers);
echo "ok";
?>
