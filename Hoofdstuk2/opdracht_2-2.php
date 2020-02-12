<?php
//Taak 1
$text1 = "Hallo";
$text2 = "een makkelijke taal";
$text3 = "toch zo'n makkelijke taal";
$text4 = "wat is";
$text5 = "PHP";
$text6 = "Nooit gedacht dat";
$text7 = "De installatie is best ingewikkeld";
$text8 = "Fijn";
$text9 = "?";
$text10 = ".";
$text11 = ",";
$text12 = "<br>";
$text13 = "is";
$text14 = "Vind je niet";
$text15 = "toch";
?>
<?php
/*
 * User: Siebe van der Ven
 */
//taak 2
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php echo "Uitwerking van PHP/opdrachten"; ?></title>
    <link href="../CSS/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<header>
    <a href="../index.php"><h1 id="h1"><?php echo "Uitwerking van PHP-opdrachten"; ?></h1></a>
</header>
<?php
echo "<p>".$text1.$text11." ".$text4." ".$text5." ".$text15." ".$text2.$text10."</p>"."<p>"." ".$text7.$text10." ".$text8." ".$text15.$text9."</p>"."<p>"." ".$text6." ".$text5." ".$text3." ".$text13.$text10."</p>";
?>
<?php
echo "<p>".$text1.$text11."</p>"."<p>".$text8." dat ".$text5." zo'n makkelijk taal is".$text10."</p>"."<p>".$text7.$text10."Vind je niet".$text9."</p>";
?>
</body>
</html>

