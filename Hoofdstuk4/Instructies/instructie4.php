<?php


//StrToTime parse english time to unix timestamp
date_default_timezone_set("Europe/Amsterdam");

$date = strtotime("+10 day");
echo date("d-m-Y",$date);