<?php
include "../INCLUDES/header.php";
include "../INCLUDES/aside.php";
//main hieronder

?>
<h3>
    RESTARIA KEES KROKET
</h3>
<form method="post" action="opdracht_5-1_form_data.php">
<table>
    <tr>
        <td>
            Visstraat 12
        </td>
    </tr>
    <tr>
        <td>
            5211 DN 's-Hertogenbosch
        </td>
    </tr>
    <tr>
        <td>
            073 613 6720
        </td>
    </tr>
    <tr>
        <td>
            info@restariakeeskroket.nl
        </td>
    </tr>
    <tr>
        <td>
            <br>
            <label for="companyName">Bedrijfsnaam</label>
        </td>
    </tr>
    <tr>
        <td>
            <input type="text" id="companyName" name="bedrijfsnaam">
        </td>
    </tr>
    <tr>
        <td>
            <label fo="surname">Voornaam</label>
        </td>
    </tr>
    <tr>
        <td>
            <input type="text" id="surname" name="voornaam">
        </td>
    </tr>
    <tr>
        <td>
            <label for="lastname"></label>
        </td>
    </tr>
    <tr>
        <td>
            <input type="text" id="lastname" name="achternaam">
        </td>
    </tr>
    <tr>
        <td>
            <label for="number">Telefoon</label>
        </td>
    </tr>
    <tr>
        <td>
            <input type="text" id="number" name="telefoonnummer">
        </td>
    </tr>
    <tr>
        <td>
            <label for="email">E-mail</label>
        </td>
    </tr>
    <tr>
        <td>
            <input type="email" id="email" name="E-mail">
        </td>
    </tr>
    <tr>
        <td>
            <label id="comment">Bericht</label>
        </td>
    </tr>
    <tr>
        <td>
            <textarea id="comment" name="bericht" placeholder="vul hier uw bericht in..."></textarea>
        </td>
    </tr>
    <tr>
        <td>
            <input type="submit">
        </td>
    </tr>
</table>
</form>
</main>
<?php
include "../Hoofdstuk3/variabelen.php";
include "../INCLUDES/footer.php";
?>
<?php
