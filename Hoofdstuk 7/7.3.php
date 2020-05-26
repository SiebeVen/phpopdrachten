<?php

/*
 * User: Siebe van der Ven
 * Date:
 * Time:
 * File:
*/
include "../INCLUDES/header.php";
include "../INCLUDES/aside.php";


?>

<?php
// Inladen functies bestand
include("functions.php");

// Starten van een database connectie
startConnection();

// Executeren van een SQL query
$query = "SELECT * FROM joke";
//Checked of het verstuurd is
if(isset($_GET["search"]))
{
    $query = "SELECT * FROM joke";
    if (!empty($_GET["search"])) {
        $kek = $_GET["search"];

        $query = "SELECT * FROM joke WHERE joketext LIKE '%$kek%'";
    }
}
$jokes = executeQuery($query);

echo "<p>$query</p>";
?>
<form method="get">
    <label for="search">Zoekterm:</label><input id="search" type="text" name="search"><button type="submit">Zoeken</button>
</form>
    <table>
        <thead>
        <tr>
            <th>
                JokeID
            </th>
            <th>
                JokeText
            </th>
            <th>
                JokeClou
            </th>
            <th>
                JokeDate
            </th>
        </tr>
        </thead>
        <tbody>
<?php
foreach ($jokes as $zinTD)
{
    echo "<tr>" . "<td>" . $zinTD['id'] . "</td>" . "<td>" . $zinTD['joketext'] . "</td>" . "<td>" . $zinTD['jokeclou'] . "</td>" . "<td>" . $zinTD['jokedate'] . "</td>" . "</tr>";
}
//$sentenceTD.
?>
        </tbody>
    </table>
<?php
include "../Hoofdstuk3/variabelen.php";;
include "../INCLUDES/footer.php";
