<?php
$botToken = "";//inserire il token del proprio bot
$website = "https://api.telegram.org/bot".$botToken;
$update = file_get_contents("php://input");//La pagina prende le il codice della pagina chiamate (bot api)
$updateArray = json_decode($update, TRUE);//trasfroma le informazione in un formato json da leggere 
$chatId = $updateArray["message"]["chat"]["id"];//prende l'id della chat
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=test");//spedisce il messaggio tramite get method
?>
