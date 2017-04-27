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
        <div id="gauche">
            <img id="carousel" src="img/image1.jpg">
        </div>
        <div id="droite">
            <p class="title">Recherche d'un tournoi</p>
            <div id="researchForm">
                <form action="traitementRecherche.php" method="post" style="font-family: 'Oxygen', sans-serif">
                    <table>
                        <td>
                            <label>Nom du tournoi :</label>
                        </td>
                        <td>
                            <input type="text" name="nom"/>
                        </td>
                        <?php
                        if (isset($_GET['errorEmpty'])) {
                            echo '<p class="errormessagelol">Veuillez remplir le champ S.V.P</p>';
                        }
                        if (isset($_GET['fileError'])) {
                            echo '<p class="errormessagelol">Fichier invalide (Corrompu ou extension invalide ?)</p>';
                        }
                        if (isset($_GET['notFound'])) {
                            echo '<p class="errormessagelol">Aucun résulat à votre recherche ...</p>';
                        }
                        ?>
                    </table>
                    <button type="submit" value="submit">Rechercher</button>
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
