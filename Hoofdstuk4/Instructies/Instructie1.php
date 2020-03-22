<?php
/*
 * Instructie date() en elseif statement
 */
    date_default_timezone_set("Europe/Amsterdam");
    echo $date = date("d-m-y ");
    echo $day = date("l");

    if($day == "Monday")
    {
        echo " het is de eerte dag van de week";
    }
    elseif($day == "Tuesday")
    {
        echo " Het is vandaag ". $day;
    }
