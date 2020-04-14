<?php
include "../INCLUDES/header.php";
include "../INCLUDES/aside.php";
//main hieronder

?>
<h3>
    Uitschrijfformulier KW1C
</h3>
<hr>
<form method="get" action="opdracht_5-2_form_data.php">
<table>
    <tr>
        <td>
            <label for="name">Voor en achternaam</label>
        </td>
        <td>
            <input type="text" id="name" name="naam">
        </td>
    </tr>
    <tr>
        <td>
            <label for="studenNumber">Studentennummer</label>
        </td>
        <td>
            <input type="text" id="studenNumber" name="studentnummer">
        </td>
    </tr>
    <tr>
        <td>
            <label for="dateDeregistration">Datum van uitschrijving</label>
        </td>
        <td>
            <input type="date" id="dateDeregistration" name="uitschrijvingDatum">
        </td>
    </tr>
    <tr>
        <td>
            <label for="reason">Reden van uitschrijving</label>
        </td>
        <td>
            <select id="reason" style="width: 100%" name="reden">
                <option value="Verkeerde keuze">Verkeerde keuze</option>
                <option value="Te moeilijk">Te moeilijk</option>
                <option value="Te weinig aanwezig">Te weinig aanwezig</option>
                <option value="thuis Situatie">Thuis problemen</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            Leerjaar
        </td>
        <td>
            <input type="radio" id="first" name="year" value="1">
            <label for="first">1e leerjaar</label><br>
            <input type="radio" id="second" name="year" value="2">
            <label for="second">2e leerjaar</label><br>
            <input type="radio" id="third" name="year" value="3">
            <label for="third">3e leerjaar</label>
        </td>
    </tr>
    <tr>
        <td>
            <input type="checkbox" name="succesklas" value="yes" id="succesklas">
            <label for="succesklas">Ik wil me aanmeldden bij de succesklas</label>
        </td>
    </tr>
    <tr>
        <td>
            <input type="checkbox" name="gegevens" value="yes" id="gegevens">
            <label for="gegevens">Verwijder mijn gegevens uit het systeem</label>
        </td>
    </tr>
    <tr>
        <td>
            <label for="redenUitschrijven">Geef hieronder de reden van je uitschrijving op</label>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <textarea name="reasonWriteOut" id="redenUitschrijven" style="width: 100%"></textarea>
        </td>
        <td>

        </td>
    </tr>
    <tr>
        <td>
            <input type="submit" value="versturen">
        </td>
    </tr>
</table>
</form>
</main>
<?php
include "../Hoofdstuk3/variabelen.php";
include "../INCLUDES/footer.php";
?>
