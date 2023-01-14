<?php

include 'Telegram.php';

$telegram = new Telegram('5850021847:AAE24CnxqkzidyzSu7N4MZHkTKjpuRBZ7Fg');
$chat_id = $telegram->ChatID();
if($text == "/start")
{
$option = array( 
    //First row
    array($telegram->buildKeyboardButton("Button 1"), $telegram->buildKeyboardButton("Button 2")), 
    //Second row 
    array($telegram->buildKeyboardButton("Button 3"), $telegram->buildKeyboardButton("Button 4"), $telegram->buildKeyboardButton("Button 5")), 
    //Third row
    array($telegram->buildKeyboardButton("Button 6")) );
$keyb = $telegram->buildKeyBoard($option, $onetime=false);
$content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Ботдан фойдаланиш учун телефон рақамингизни рўйхатдан ўтказиш зарур. 📱

Қуйидаги кнопка орқали телефон рақамингизни юборинг. ⬇️
    
    Тасдиқлаш коди SMS тарзида юборилади. ️📩");
$telegram->sendMessage($content); 
}
?>


