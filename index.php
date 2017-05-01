<!doctype html>
<html lang="en">
<?php

include "entete.php";
include "pieddepage.php";
include "htmlhead.php";
MakeHTMLHead();
?>


<body onload="pictureCarousel()">
<div id="container">

    <?php
    ShowHeader();

    ?>
    <div id="contenu">
        <div id="gauche">
            <img id="carousel" src="img/image1.jpg">
        </div>
        <div id="droite">
            <p class="title">Bienvenue sur GameOn !!</p>
            <p class="textright">Nous sommes la plateforme de vente de jeu en ligne la plus réputée au monde. Cette plateforme vous offre la plus vaste variété
            de jeux fraichement sorti l'industrie. Le but de notre compagnie consite à vous faire le prix le plus chère pour que nous ayons le plus de profits
            possible.</p>
        </br>
            <p class="textright">Nous offrons sur ce site, une variété de jeu extraordinaire.</p>
            <div id="gametable">
                <?php
                include "data/connexionBD.php";
                include 'requestAllGame.php';
                ?>

            </div>
        </div>

    </div>
    <div class="clear"></div>
    <?php
    ShowFooter();
    ?>
</div>


</div>
</body>
</html>