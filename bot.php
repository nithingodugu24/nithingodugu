<?php

date_default_timezone_set("Asia/kolkata");
    //Data From Webhook
    $content = file_get_contents("php://input");
    $update = json_decode($content, true);
    $chat_id = $update["message"]["chat"]["id"];
    $message = $update["message"]["text"];
    $message_id = $update["message"]["message_id"];
    $id = $update["message"]["from"]["id"];
    $username = $update["message"]["from"]["username"];
    $firstname = $update["message"]["from"]["first_name"];
    $chatname = '@vmrmecattbot';
       $apiToken = '5249462923:AAEquCkhHvyVmqMfLZHSLq6DC9kV0G7COjI';
        
if($message == "/start"){
echo "ok";
        send_message($apiToken,$chat_id,$message_id, "Hey $firstname \nUse /cmds to view commands \n$chatname");
    }

if(strpos($message, "Hi") === 0){
echo "ok";
        send_message($apiToken,$chat_id,$message_id, "Hey $firstname \nWelcome to the bot, How may I help you?");
    }



    function send_message($apiToken,$chat_id,$message_id, $message){
        $text = urlencode($message);
          
        file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?chat_id=$chat_id&reply_to_message_id=$message_id&text=$text");
    }


    ?>
