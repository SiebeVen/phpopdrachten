<?php
/**
 * User: Siebe van der Ven
 * Date:
 * Time:
 * File:
 */
include "../../INCLUDES/header.php";
include "../../INCLUDES/aside.php";
?>
    <form action="checklogin.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="user">Usename</label>
                </td>
                <td>
                    <input type="text" id="user" name="username">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="pass">Password</label>
                </td>
                <td>
                    <input type="password" id="pass" name="password">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit">
                </td>
                <td>
                </td>
            </tr>
        </table>
    </form>
<?php
include "../../Hoofdstuk3/variabelen.php";;
include "../../INCLUDES/footer.php";
?>