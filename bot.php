<?php 
    
    include 'Telegram.php';

    $telegram = new Telegram('5940638836:AAEtoJSXbVRcQs1aVycTxCdjdYmxm7BKT-M');
    $chat_id = $telegram->ChatID();
    // echo $chat_id;
    $text = $telegram->Text();
     
$telegram = new Telegram('YOUR TELEGRAM TOKEN HERE');

$req = $telegram->getUpdates();

for ($i = 0; $i < $telegram-> UpdateCount(); $i++) {
	// You NEED to call serveUpdate before accessing the values of message in Telegram Class
	$telegram->serveUpdate($i);
	$text = $telegram->Text();
	$chat_id = $telegram->ChatID();

	if ($text == '/start') {
		$reply = 'Working';
	 $content = array('chat_id' => $chat_id, 'text' => "Salom hush kelibsiz!"); 
    $telegram->sendMessage($content); 
    
     $ulash = mysqli_connect("localhost","id17907369_rootbot","l(Gysg/1@W*#E7}F","id17907369_itedukokandbot") or die("Bazaga ulanmadi");
                $yoz = "insert into user (username,password) values ('{$text}','{$text}')";

                $r = mysqli_query($ulash,$yoz) or die(mysqli_error($ulash));
                if($r)
                {
                    echo "yozdi";
                }
                else{
                    echo "xato";
            
                }
    $option = array( 
    //First row
    array($telegram->buildKeyboardButton("✅ Button 1"), $telegram->buildKeyboardButton("Button 2")), 
    //Second row 
    array($telegram->buildKeyboardButton("Button 3"), $telegram->buildKeyboardButton("Button 4"), $telegram->buildKeyboardButton("Button 5")), 
    //Third row
    array($telegram->buildKeyboardButton("Button 6")),
    array($telegram->buildKeyboardButton("Button 7"))
    );
    $keyb = $telegram->buildKeyBoard($option, $onetime=false, $resize=true);
    $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "This is a Keyboard Test");
    $telegram->sendMessage($content);
    
   }
   elseif($text == "/help")
   {
        $content = array('chat_id' => $chat_id, 'text' => "Adminga murojat qiling!"); 
       $telegram->sendMessage($content); 
   }
   elseif($text == "✅ Button 1")
    {
    //     $content = array('chat_id' => $chat_id, 'text' => "Bu video"); 
    //   $telegram->sendMessage($content); 
    
    $option = array( 
    //First row
    array($telegram->buildKeyboardButton("✅ Button 1"), $telegram->buildKeyboardButton("Button 2")), 
    //Second row 
   
    );
    $keyb = $telegram->buildKeyBoard($option, $onetime=false, $resize=true);
    $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "This is a Keyboard Test");
    $telegram->sendMessage($content);
	}
	// DO OTHER STUFF
}  
    
    
    
?>
