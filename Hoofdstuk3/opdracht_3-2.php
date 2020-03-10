<?php
include "../INCLUDES/header.php";
include "../INCLUDES/aside.php";
$trafficLightColor = "groen";
$ambulanceComing = false;
$countryName = "België";
$currentAge = 16;
$driveOn = false;

if($trafficLightColor == "groen" && $ambulanceComing == false)
    {
        $driveOn = true;
    }
else
    {
        $driveOn = false;
    }
if($driveOn == true)
{
    echo "u mag doorrijden <br>";
}
else if($driveOn == false)
{
    echo "u moet stoppen <br>";
}

if($countryName == "Bulgarije" && $currentAge >= 18||$countryName == "Nederland" && $currentAge >= 18 || $countryName == "België" && $currentAge >= 18 || $countryName == "Cyprus" && $currentAge >= 18)
{
    echo "Je woont in ".$countryName." en bent ".$currentAge." jaar oud.<br> je mag hier alle alcohol drinken";
}
elseif($currentAge == 16 && $countryName == "België"|| $currentAge == 17 && $countryName == "België")
{
    echo "Je woont in ".$countryName." en bent ".$currentAge." jaar oud.<br> je mag hier zwakke alcohol drinken";
}
elseif($currentAge == 18 && $countryName == "Zweden"|| $currentAge == 19 && $countryName == "Zweden")
{
    echo  "Je woont in ".$countryName." en bent ".$currentAge." jaar oud.<br> je mag hier zwakke alcohol drinken";
}
elseif($currentAge >= 20 && $countryName == "Zweden")
{
    echo "Je woont in ".$countryName." en bent ".$currentAge." jaar oud<br> je mag hier alle alcohol drinken";
}
elseif($currentAge >= 17 && $countryName == "Cyprus")
{
    echo "Je woont in ".$countryName." en bent ".$currentAge." jaar oud.<br> je mag hier alle alcohol drinken";
}
elseif($currentAge <= 17)
{
    echo "Je woont in ".$countryName." en bent ".$currentAge." jaar oud.<br> je mag hier geen alcohol drinken";
}

