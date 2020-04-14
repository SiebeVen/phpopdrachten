<?php
//Ophalen formulier gegevens
?>
<h3>Uitschrijfformulier KW1C</h3>
<hr>
<table>
    <tr>
        <td>
            Voor en achternaam
        </td>
        <td>
            <?php
            echo $_GET["naam"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Studentennummer
        </td>
        <td>
            <?php
            echo $_GET["studentnummer"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Datum van uitschrijving
        </td>
        <td>
            <?php
            echo $_GET["uitschrijvingDatum"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Reden van uitschrijving
        </td>
        <td>
            <?php
            echo $_GET["reden"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Leerjaar
        </td>
        <td>
            <?php
            echo $_GET["year"]."e leerjaar";
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Aanmeldden bij de succesklas:
        </td>
        <td>
            <?php
            if(!empty( $_GET["succesklas"]))
            {
                echo "JA";
            }
            else
            {
                echo "NEE";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Verwijderen gegevens:
        </td>
        <td>
            <?php
            if(!empty( $_GET["gegevens"]))
            {
                echo "JA";
            }
            else
            {
                echo "NEE";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Reden van Uitschrijving:
        </td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2">
            <?php
            echo $_GET["reasonWriteOut"];
            ?>
        </td>
        <td>

        </td>
    </tr>
</table>
