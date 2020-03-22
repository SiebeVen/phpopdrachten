<?php
date_default_timezone_set("Europe/Amsterdam");
    $day = date("l");

    switch($day) {
        case "Monday":
            echo " Het is vandaag maandag";
            break;
        case "Tuesday":
            echo " Het is vandaag dinsdag";
            break;
        default:
            echo " Het is vandaag geen dag";
            break;
    }