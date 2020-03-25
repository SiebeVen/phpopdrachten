<?php
include "../INCLUDES/header.php";
include "../INCLUDES/aside.php";
//main hieronder

?>
<?php
date_default_timezone_set("Europe/Amsterdam");

$task = "";

for($counter = 0; $counter <= 7; $counter++)
{
    $date = strtotime("+$counter day");
    if($counter == 0)
    {
        $task = $task . " Dag " . date("w",$date) . " is " . date("l") . " ".date("d-m-Y")."<br>";
    }
    elseif($counter == 7)
    {
        $task = $task . " Dag " . date("w",$date) . " is " . date("l", $date) . " ".date("d-m-Y",$date)."<br>";
    }
    else
    {
        $task = $task . " Dag " . date("w",$date) . " is " . date("l", $date) . " ".date("d-m-Y",$date)."<br>";
    }

}
echo "<h1>Weekkalender komede week:</h1><br>".$task;

?>
<?php
include "../Hoofdstuk3/variabelen.php";
include "../INCLUDES/footer.php";
?>