<?php
session_start();
include "data/connexionBD.php";
if (!empty($_POST['username']) && !empty($_POST['mdp'])) {

    $user = $_POST['username'];
    $pass = $_POST['mdp'];

    try{
        $results = $db -> QUERY("SELECT Pseudo,MotDePasse FROM Administrateur WHERE Pseudo='".$user."'AND MotDePasse='".$pass."'");
        $results->setFetchMode(PDO::FETCH_OBJ);
        if($ligne = $results -> fetch()){
            $_SESSION['user'] = $user;
            $results -> closeCursor();
            header("Location:index.php");
        }
        else{
            $results -> closeCursor();
            header("Location:connexion.php?error=5");
        }

        $results -> closeCursor();

    }
    catch (PDOException $exec){
          echo"CODE : ".$exec;
    }


} // Section de gestion des codes d'erreur
else {
    // Code 0 = username manquant
    if (empty($_POST['username'])) {
        header('Location:connexion.php?error=0');
    }
    // Code 1 = mot de passe manquant
    if (empty($_POST['mdp']) && !empty($_POST['username'])) {
        header('Location:connexion.php?error=1');
    }
    // Code 2 = mot de passe et nom d'utilisateur manquant
    if (empty($_POST['mdp']) && empty($_POST['username'])) {
        header('Location:connexion.php?error=2');
    }

}
