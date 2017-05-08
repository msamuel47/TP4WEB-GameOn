<!doctype html>
<html lang="en">
<?php

include "entete.php";
include "pieddepage.php";
include "htmlhead.php";
include "data/connexionBD.php";
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
            <div id="gamelistingform">

                <form id ='thisForm' action='index.php' method="get">

                    <label for="genre">Genre : </label>
                    <select name="genre" onchange="this.form.submit()" onload="this.form.submit()">

                        <?php
                        //Listage des catégories
                        try{
                            $results = $db->query('SELECT * FROM TypeJeu WHERE TRUE');
                            $results->setFetchMode(PDO::FETCH_OBJ);

                            echo'<option value="---">--Veuillez Choisir--</option>
                                 <option value="0">Tous</option>';
                            while ($ligne = $results->fetch()){
                                echo '<option value="'.$ligne->IdGenre.'">'.$ligne->Genre.'</option>';
                            }
                        }
                        catch(PDOException $exec){


                        }
                        ?>
                    </select>


                </form>
            </div>

            <div id="gametable">
                <?php
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