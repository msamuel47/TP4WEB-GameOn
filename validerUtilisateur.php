<?php
session_start();
if (!empty($_POST['username']) && !empty($_POST['mdp'])) {

    $user = $_POST['username'];
    $pass = $_POST['mdp'];
    if (is_file('admins.txt')) {
        $userAndPassword = [];
        $verification = file('admins.txt');
        $userLength = 0;
        foreach ($verification as $key => $value) {
            $userAndPassword[$key] = explode('|', $value);
            $userLength++;
        }


        for ($i = 0; $i < $userLength; $i++) {
            // i = indice pour trouve le combo utilisateur/mdp
            //  0 ou 1 pour trouver dans le combo utilisateur/mdp la valeur du user ou du mdp
            if ($user == trim($userAndPassword[$i][0]) && $pass == trim($userAndPassword[$i][1])) {
                $_SESSION['user'] = $user;
                header('Location: index.php');

            }
            if ($user == trim($userAndPassword[$i][0]) && $pass != trim($userAndPassword[$i][1])) {
                //Code 3 = mot de passe invalide
                header("Location: connexion.php?error=3");
            } else {
                if (isset($_SESSION['user'])) {
                    header('Location: index.php');
                } else {

                    header("Location: connexion.php?errorInvalid=1");
                }
            }
        }
    } else {
        //Code 4 = Utilisateur non existant ...
        header("Location: connexion.php?error=4");
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
