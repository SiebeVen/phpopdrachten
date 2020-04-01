<?php
//Ophalen formulier gegevens
?>
<h3>Ingevoerde gegevens:</h3>
<table>
    <tr>
        <td>
            Bedrijfsnaam:
        </td>
        <td>
            <?php
            echo $_POST["bedrijfsnaam"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Voornaam:
        </td>
        <td>
            <?php
            echo $_POST["voornaam"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Achternaam:
        </td>
        <td>
            <?php
            echo $_POST["achternaam"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Telefoon:
        </td>
        <td>
            <?php
            echo $_POST["telefoonnummer"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            E-mail:
        </td>
        <td>
            <?php
            echo $_POST["E-mail"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Bericht:
        </td>
        <td>
            <?php
            echo $_POST["bericht"];
            ?>
        </td>
    </tr>
</table>
