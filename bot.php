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
        

$url = "https://api.telegram.org/bot5249462923:AAEquCkhHvyVmqMfLZHSLq6DC9kV0G7COjI/sendChatAction";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"chat_id":"973566639","action":"typing","message_thread_id":"357"}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resphh = curl_exec($curl);
curl_close($curl);



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
$resp2 = substr($resp, 1, -1);

$resp2 = str_replace("\\", "", $resp2);



$mains = json_decode($resp2, true);




$matt = $mains['Table'][0]['NumberOfDaysPresent'] ;
 
$mainatt = round($matt);
$nodays = $mains['Table'][0]['NumberOfDaysPresent'];


$perc = $mains['Table'][0]['Percentage'];


$name = $mains['Table'][0]['Name'];


  


if($name!=''){

send_message($apiToken,$chat_id,$message_id, "Your Attendance Report: \nPin: ".$pin."\nName: ".$name."\nNo.of days present: ".$nodays."\nTotal Percentage: ".$perc);

}else{

           
           send_message($apiToken,$chat_id,$message_id, "Invalid Pin number");

}
    
    }







//Attendance Ends here


    function send_message($apiToken,$chat_id,$message_id, $message){
        $text = urlencode($message);
          
        file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?chat_id=$chat_id&reply_to_message_id=$message_id&text=$text");
    }


    ?>
