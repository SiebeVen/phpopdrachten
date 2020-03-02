<?php
    $eventName = "ElfstedenTocht";
    $eventNameFrisian = "Alvestêdetocht";
    $lengthTour = 200;
    $eventType = "schaatstocht";
    $iceType = "natuurijs";
    $organizationName = "Koninklijke Vereniging De Friesche Elf Steden";
    $capitalName = "Leeuwarden";
    $provinceName = "Friesland";
    $timesDriven = 15;
    $firstTour = 1909;
    $maxDrives = 1;
    $verhaal = "De ".$eventName." (Fries: ".$eventNameFrisian.") is een ".$lengthTour." kilometer lange ".$eventType." over ".$iceType." die wordt georganiseerd door de ".$organizationName.". ".$capitalName.", de hoofdstad van ".$provinceName.", is start- en aankomstplaats. De".$eventType." is inmiddels ".$timesDriven." maal verreden en werd voor het eerst in ".$firstTour." gereden en wordt maximaal ".$maxDrives." keer per winter gehouden.";

?>
<?php
include "../INCLUDES/header.php";
include "../INCLUDES/aside.php";
//Tekst hier onder
echo "<p>".$verhaal."</p>";
?>
</body>
</html>