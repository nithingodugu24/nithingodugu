<?php

$colors = array("21090-ME-009","21090-ME-022","21090-ME-041","21090-ME-051","21090-ME-052","21090-ME-053"); 

foreach ($colors as $value) {
 
 $url = "https://srisaionline.co.in/runner/singleatt.php?pin=".$value;
 
 file_get_contents($url);
}
