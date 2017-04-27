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
            <p class="title">It's all about gaming</p>
            <p class="textright">Bienvenue sur le site officiel d'une des plus grandes organisations de tournois de gaming professionnel au monde.
            Ici se rassemble quelque milliers de joueurs réparti sur la majorité du globe. Nous avons récemment signé un accord avec la <strong>
                    Corée du Nord</strong> Pour permettre à une poignée de joueurs nord coréen à jouer.</p>
        </br>
            <p class="textright">Nous offrons sur ce site, une variété de tournois professionnel avec plusieurs type de jeux.</p>
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