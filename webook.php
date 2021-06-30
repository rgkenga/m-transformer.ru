<?php
$content = file_get_contents('php://input');
//записываем в файл log_webhook.txt все что прилетает в теле сообщения
$f = fopen(__DIR__ . '/log_webhook.txt', 'a');
fwrite($f, date('Y-m-d H:i:s') .': '. $content . PHP_EOL);
fclose($f);
?>
