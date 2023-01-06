<?php


    
        $text =$postdata = file_get_contents("php://input");

          $apiToken = '5249462923:AAEquCkhHvyVmqMfLZHSLq6DC9kV0G7COjI';
        file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?chat_id=973566639&text=$text");
    ?>
