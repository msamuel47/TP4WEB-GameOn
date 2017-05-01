<?php

try {
    $results = $db->query('SELECT Jeu.Miniature, Jeu.Titre, TypeJeu.Genre, Jeu.Plateforme, Jeu.Prix, Jeu.CodeJeu  FROM Jeu INNER JOIN
    TypeJeu On Jeu.IdGenre = TypeJeu.IdGenre WHERE TRUE ORDER BY Jeu.Titre');
    $results->setFetchMode(PDO::FETCH_OBJ);
    echo'<table border="double">
         <tr>
             <th>Aperçu</th>
             <th>Titre</th>
             <th>Genre</th>
             <th>Plateforme</th>
             <th>Prix</th>
             <th>Détails</th>
         </tr>

';

    while ($ligne = $results->fetch()) {

        echo'<tr>';
        echo'<td><img src="'.$ligne ->Miniature.'" alt="'.$ligne ->Titre.'"></td>';
        echo'<td>'.$ligne ->Titre.'</td>';
        echo'<td>'.$ligne ->Genre.'</td>';
        echo'<td>'.$ligne ->Plateforme.'</td>';
        echo'<td>'.round($ligne ->Prix , 2).' $</td>';
        echo'<td><a href="detailsJeu.php?CodeJeu='.$ligne ->CodeJeu.'">En savoir plus ...</a></td>';


        echo'</tr>';


    }


    echo'</table>';
}
catch (PDOException $exec){

}

