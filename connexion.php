<!doctype html>
<?php
include "entete.php";
include "pieddepage.php";
include "htmlhead.php";
MakeHTMLHead();
?>
<html lang="en">

<div id="container">

    <?php
    ShowHeader();

    ?>
    <div id="contenu">
        <div id="gauche">
            <img id="carousel" src="img/image1.jpg">
        </div>
        <div id="droite">
            <div id="login">
                <p class="title">Connexion admin</p>
                <form id="login" action="validerUtilisateur.php" method="post">
                    <table>
                        <tr>
                            <td><label>Nom d'utilisateur :</label></td>
                            <td><input type="text" name="username"/></td>
                            <?php
                            if (isset($_GET['error'])) {
                                if($_GET['error'] == 0){
                                    echo'<td><p class="errormessagelol">Veuillez entrer un nom d\'utilisateur</p></td>';
                                }

                                if ($_GET['error'] == 4) {
                                    echo'<td><p class="errormessagelol">Nom d\'utilisateur non existant</p></td>';
                                }
                                if ($_GET['error'] == 5) {
                                    echo'<td><p class="errormessagelol">Informations invalides :(</p></td>';
                                }
                            }
                            ?>
                        </tr>
                        <tr>
                            <td><label>Mot de passe :</label></td>
                            <td><input type="password" name="mdp"/></td>
                            <?php
                            if (isset($_GET['error'])){
                                if($_GET['error'] == 1){
                                    echo'<td><p class="errormessagelol">Veuillez entrer un mot de passe</p></td>';
                                }
                            }
                            ?>
                        </tr>
                    </table>
                    <input type="submit" value="connexion"/>

                </form>

            </div>
        </div>
    </div>
    <div class="clear"></div>
    <?php
    ShowFooter();
    ?>
</div>

</body>

</html>