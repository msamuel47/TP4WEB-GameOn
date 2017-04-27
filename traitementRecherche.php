<?php


if(!empty($_POST['nom'])) {
    session_start();
    if (is_file("tournois.txt")) {
        $tableauTournois = file('tournois.txt');

        $tournoisAVerifier = [];
        foreach ($tableauTournois as $index => $value) {
            $tournoisAVerifier[$index] = explode('|', $value);
        }

        $c = 0;
        for ($i = 0; $i < count($tournoisAVerifier); $i++) {

            if (trim($tournoisAVerifier[$i][0]) == $_POST['nom']) {
                $tournoiresultat[$c] = $tournoisAVerifier[$i];

                $c++;
            }
        }
        $_SESSION['array'] = $tournoiresultat;
        if (!empty($tournoiresultat)) {
            header('Location:resulatRecherche.php');
        } else {
            header("Location: recherche.php?notFound=1");
        }

    }
    else
    {
         header('Location : recherche.php?fileError=1');
    }
}
else{
    header('Location: recherche.php?errorEmpty=1');
}


