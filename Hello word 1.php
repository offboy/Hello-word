<?php
	$token = "<656737170:AAFLJ_9jokkPRd7Rq8zaxZpKZHh5O0KBy4c>";
	$update = json_decode(file_get_contents('php://input'), true);
	file_get_contents("https://api.telegram.org/bot".$656737170:AAFLJ_9jokkPRd7Rq8zaxZpKZHh5O0KBy4c."/sendMessage?chat_id=".$update['message']['chat']['id']."&text=Hello World");
?>