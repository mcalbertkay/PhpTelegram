<?php

$update = file_get_contents("php://input");//"php://input"
$updateArray = json_decode($update, TRUE);
$chatId = $updateArray["message"]["chat"]["id"];
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=Funzionaaa!!Huahuahau");




?>