<?php
include  "../Hoofdstuk3/variabelen.php";
?>
</main>
<footer>
    <?php
    date_default_timezone_set("Europe/Amsterdam");
    $hour = date("H");
    $year = date('Y');
    if($hour >= 0 && $hour <= 5)
    {
        $hour = "Goedennacht";
//        echo "Goedennacht ";
    }
    elseif($hour >= 6 && $hour <= 11)
    {
        $hour = "Goedeochtend";
//        echo "Goedenochtend ";
    }
    elseif($hour >= 12 && $hour <=17)
    {
        $hour = "Goedenmiddag";
//        echo "Goedenmiddag ";
    }
    elseif($hour >= 18 && $hour <= 23)
    {
        $hour = "Goedenavond";
//        echo "Goedenavond ";
    }
//   echo $name;
//    echo " ".$year;
    session_start();
    if (isset($_SESSION['username']))
    {
       $bezoeker = $_SESSION['username']. "&nbsp;<a href='/../../phpopdrachten/Hoofdstuk%206/Opdracht%206.1/loguit.php'>Loguit</a>";
    }
    else
    {
        $bezoeker = "onbekende bezoeker". "&nbsp;<a href='/../../phpopdrachten/Hoofdstuk%206/Opdracht%206.1/opdracht61.php'>Login</a>";
    }
    echo $hour." ".$bezoeker." "."&copy;"." ".$year."";
    ?>
</footer>
</body>
</html>