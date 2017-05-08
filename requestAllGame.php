<?php
if(isset($_GET['genre'])) {
    try {
        if($_GET['genre'] == "0"){
            $listeDeJeux = $db->query('SELECT Jeu.IdGenre, Jeu.Miniature, Jeu.Titre, TypeJeu.Genre, Jeu.Plateforme, Jeu.Prix, Jeu.CodeJeu  FROM Jeu INNER JOIN
    TypeJeu On Jeu.IdGenre = TypeJeu.IdGenre WHERE TRUE');
        }
        else{
        $prepareLine='SELECT Jeu.IdGenre, Jeu.Miniature, Jeu.Titre, TypeJeu.Genre, Jeu.Plateforme, Jeu.Prix, Jeu.CodeJeu  FROM Jeu INNER JOIN
    TypeJeu On Jeu.IdGenre = TypeJeu.IdGenre WHERE Jeu.IdGenre=:iDGenre';
        $listeDeJeux= $db->prepare($prepareLine);
        $listeDeJeux->execute(array('iDGenre'=>$_GET['genre']));
        }
        $listeDeJeux->setFetchMode(PDO::FETCH_OBJ);
        echo '<table border="double">
         <tr>
             <th>Aperçu</th>
             <th>Titre</th>
             <th>Genre</th>
             <th>Plateforme</th>
             <th>Prix</th>
             <th>Détails</th>
         </tr>';


        while ($ligne = $listeDeJeux->fetch()) {

            echo '<tr>';
            echo '<td><img src="' . $ligne->Miniature . '" alt="' . $ligne->Titre . '"></td>';
            echo '<td>' . $ligne->Titre . '</td>';
            echo '<td>' . $ligne->Genre . '</td>';
            echo '<td>' . $ligne->Plateforme . '</td>';
            echo '<td>' . round($ligne->Prix, 2) . ' $</td>';
            echo '<td><a href="detailsJeu.php?CodeJeu=' . $ligne->CodeJeu . '">En savoir plus ...</a></td>';


            echo '</tr>';


        }

        $listeDeJeux->closeCursor();
        echo '</table>';
    } catch (PDOException $exec) {
       echo'ERROR '.$exec ;
       var_dump($listeDeJeux);
    }
}
else{

}

