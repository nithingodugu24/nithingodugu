<?php

$pin = $_REQUEST['pin'];

$url = "https://exams.sbtet.telangana.gov.in/API/api/PreExamination/getAttendanceReport?Pin=".$pin."";

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


$matt = $mains['Table'][0]['NumberOfDaysPresent'] /90*100;
 


$botmessage = 'Attendance Report : %0APin  : '.$mains['Table'][0]['Pin'].'%0AName : '.$mains['Table'][0]['Name'].'%0APresent Days : '.$mains['Table'][0]['NumberOfDaysPresent'].'%0AWeekly Attendance: '.$mains['Table'][0]['Percentage'].'%0AMain Attendance : '.round($matt).'';



$cid = "@vmrmecattbot";


$url = "https://api.telegram.org/bot5249462923:AAEquCkhHvyVmqMfLZHSLq6DC9kV0G7COjI/sendMessage?chat_id=@vmrmecattbot&text=".$botmessage."";






$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);

?>

