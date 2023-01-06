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
    
        $text =$postdata = file_get_contents("php://input");

          $apiToken = '5249462923:AAEquCkhHvyVmqMfLZHSLq6DC9kV0G7COjI';
        file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?chat_id=973566639&text=$text");
    ?>
