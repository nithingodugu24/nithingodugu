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





   
if(strpos($message, "/attendance") === 0){
        $pin = substr($message, 12);
        $weatherToken = "89ef8a05b6c964f4cab9e2f97f696c81"; ///get api key from openweathermap.org


$url = "https://sbtet.telangana.gov.in/API/api/PreExamination/getAttendanceReport?Pin=$pin";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);





           send_message($apiToken,$chat_id,$message_id, "Invalid Pin number".$resp);

    }







//Attendance Ends here


    function send_message($apiToken,$chat_id,$message_id, $message){
        $text = urlencode($message);
          
        file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?chat_id=$chat_id&reply_to_message_id=$message_id&text=$text");
    }


    ?>
