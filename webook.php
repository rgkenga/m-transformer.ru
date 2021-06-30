<?php

header('Access-Control-Allow-Origin: *');

$headers = "From: rgkenga@yandex.ru";​ 
/* замените электронную почту на действующую почту,  с которой вам будет приходить письмо  */
​
 $message = print_r($_POST,true);
 @mail('rgkenga@yandex.ru', 'Tilda TEST', $message, $headers);
/* замените электронную почту на вашу действующую почту,  на которую вам будет приходить письмо  */

echo"ok";

?>
