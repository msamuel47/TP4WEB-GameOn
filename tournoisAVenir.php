<!doctype html>
<html lang="en">
<?php
include "entete.php";
include "pieddepage.php";
include "afficherTournois.php";
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
        <div id="droite" style="height: 100%;">
            <?php
            ShowTournament();
            ?>
        </div>
        <div class="clear"></div>
    </div>
    <?php
    ShowFooter();
    ?>


</div>
</body>
</html>