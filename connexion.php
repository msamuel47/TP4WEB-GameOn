<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin connect</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">

</head>
<body>
<p class="title">Admin connect v2.4</p>
<div id="login">
    <form id="login" action="validerUtilisateur.php" method="post">
        <table>
            <tr>
                <td><label>Nom d'utilisateur :</label></td>
                <td><input type="text" name="username"/></td>
                <?php
                if (isset($_GET['error'])) {
                    if($_GET['error'] == 0){
                        echo'<td><p class="errormessagelol">Veuillez entrer un nom d\'utilisateur</p></td>';
                    }

                    if ($_GET['error'] == 4) {
        echo'<td><p class="errormessagelol">Nom d\'utilisateur non existant</p></td>';
                    }
                }
                ?>
            </tr>
            <tr>
                <td><label>Mot de passe :</label></td>
                <td><input type="password" name="mdp"/></td>
                <?php
                if (isset($_GET['error'])){
                    if($_GET['error'] == 1){
                        echo'<td><p class="errormessagelol">Veuillez entrer un mot de passe</p></td>';
                    }
                }
                ?>
            </tr>
        </table>
        <input type="submit" value="connexion"/>

    </form>

</div>
</body>