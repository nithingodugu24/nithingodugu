<?php


$id = str_pad($_REQUEST['rand'], 3, "0", STR_PAD_LEFT);
$web = $_REQUEST['web'];
$pin = "21090-ME-".$id;
$url = "https://exams.sbtet.telangana.gov.in/API/api/PreExamination/getAttendanceReport?Pin=".$pin;

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


$name = $mains['Table'][0]['Name'];
$per = $mains['Table'][0]['Percentage'];


echo $pin." - ".$name." =<b><font color='green'>".$per."</font></b><br>";

