<!doctype html>
<html lang="en">
<?php
include "entete.php";
include "pieddepage.php";
include "htmlhead.php";
MakeHTMLHead();
?>

<body onload="setInterval(pictureCarousel())">
<div id="container">
    <?php
    ShowHeader();
    ?>
    <div id="contenu">


        <div id="gauche" style="height: 100% ; background-color: #ff5b5a">
            <img id="carousel" src="img/image1.jpg">
        </div>
        <div id="droite" style="height: 100%">
            <p class="title" style="color: black;">Enregistrer un tournoi</p>
            <div id="form">
                <form action="traitement.php" method="post">
                    <table style="font-family: 'Oxygen', sans-serif">
                        <tr>

                            <td><label> Nom de l'événement :</label></td>
                            <td><input type="text" name="nomEvent"/></td>
                            <?php
                            if (isset($_GET['error'])) {
                                echo '<td><p class="errormessagelol">Des champs sont manquant, veuillez complèter le formulaire</p></td>';
                            }
                            if (isset($_GET['succes'])) {
                                if ($_GET['succes'] == 1) {
                                    echo '<td><p style="color: darkgreen ; font-family: \'Oxygen\', sans-serif">Evenement enregistré avec succès ...</p></td>';
                                }
                            }
                            ?>
                        </tr>
                        <tr>
                            <td><label> Date :</label></td>
                            <td><input type="date" name="date"/></td>
                        </tr>
                        <tr>
                            <td><label> Ville :</label></td>
                            <td><input type="text" name="city"/></td>
                        </tr>
                        <tr>
                            <td><label> Pays :</label></td>
                            <td><input type="text" name="country"/></td>
                        </tr>
                        <tr>
                            <td><label> Jeu :</label></td>
                            <td><input type="text" name="game"/></td>
                        </tr>
                        <tr>
                            <td><label> Nombre maximum de joueurs :</label></td>
                            <td><input type="number" maxlength="4" name="maxPlayer"/></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" onsubmit="" value="soumettre"/></td>
                        </tr>
                    </table>
                    <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == 0) {
                            echo '<p>Le fichier tournois.txt n\'est pas valide</p>';
                        };
                    }
                    ?>


                </form>
            </div>
        </div>

        <div class="clear"></div>
    </div>

    <?php
    ShowFooter();
    ?>


</div>
</body>
</html>