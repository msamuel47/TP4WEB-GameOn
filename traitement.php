<?php
//Validation de la form
if (!empty($_POST['nomEvent']) && !empty($_POST['date']) && !empty($_POST['city'])
    && !empty($_POST['maxPlayer']) && !empty($_POST['country']) && !empty($_POST['game'])
) {
    EnregistrerLaForm();
    //Validation avancée pour verification des champs manquant
} else {

    //Erreur 1 = des champs sont manquants veuillez les remplir ...
    header('Location:enregistrer.php?error=1');
}

function EnregistrerLaForm()
{
    if (is_file("tournois.txt") == true) {
        //Ouverture du fichier en mode ecriture
        $fichier = fopen("tournois.txt", "a");
        //Creation d'un tableau contenant les données entrées dans la form
        $tournoiAEnregistrer = array($_POST['nomEvent'], $_POST['date'], $_POST['city'], $_POST['city'], $_POST['country'], $_POST['game'], $_POST['maxPlayer']);
        //Creation d'un tableau pour la création d'un timestamp
        $validerDate = explode('-', $_POST['date']);
        $dateEnInt = array(intval($validerDate[0]), intval($validerDate[1]), intval($validerDate[2]));
        //Création du timestamp en fonction de la date donnée
        $timestamp = mktime(0, 0, 0, $validerDate[1], $validerDate[2], $validerDate[0]);
        //Conversion du timestamp en string pour l'inserstion du tournois dans le tableau
        $stringTimestamp = strval($timestamp);

        //Inscription du tournois dans le fichier de texte
        $evenementFormate = "\r\n" . $_POST['nomEvent'] . '|' . $stringTimestamp . '|' . $_POST['city'] . '|' . $_POST['country'] . '|' . $_POST['game'] . '|' . $_POST['maxPlayer'];
        // Si l'écriture sur le fichier fonctionne ...
        if (fwrite($fichier, $evenementFormate)) {
            //Code de succès 1 = l'événement à bel et bien été enregistré ...
            header('Location:enregistrer.php?succes=1');
        } //Sinon...
        else {
            //Erreur 200 = probleme avec le fichier : ouvert en readonly ? , le fichier est t'il en cour d'utilisation ?
            header('Location:enregistrer.php?error=200');
            fclose($fichier);
        }


    } else {
        // Code d'erreur 0 = le fichier n'est pas valide
        header("Location:enregistrer.php?error=0");
    }
}

?>