<?php
// While & for loop
date_default_timezone_set("Europe/Amsterdam");
//echo date("d-m-y");


$counter = 1;
$test = "";
while($counter <= 10)
{
    $test = $test . $counter . "<br>";
    $counter = $counter + 1;
    //Alternative to use is $counter++;
}
for($teller = 1; $teller <= 10; $teller++)
{
    echo $teller . "<br>";
}

echo $test;
