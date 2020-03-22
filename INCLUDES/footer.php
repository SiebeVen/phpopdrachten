<?php
include  "../Hoofdstuk3/variabelen.php";
?>
</main>
<footer>
    <?php
    date_default_timezone_set("Europe/Amsterdam");
    $hour = date("H");
    if($hour >= 0 && $hour <= 5)
    {
        echo "Goedennacht ";
    }
    elseif($hour >= 6 && $hour <= 11)
    {
        echo "Goedenochtend ";
    }
    elseif($hour >= 12 && $hour <=17)
    {
        echo "Goedenmiddag ";
    }
    elseif($hour >= 18 && $hour <= 23)
    {
        echo "Goedenavond ";
    }
    echo $name;
    echo " ".$year;
    ?>
</footer>
</body>
</html>