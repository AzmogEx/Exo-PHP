<?php
    $NOM_SITE = "MonSite";
    $nom = "arco";
    $nb_caracteres = 0;
    $Voyelles = "AEIOUYaeiouy";
    $compteur = 0;
    $Voyelle_ou_consonne = FALSE;
    $marques = ['Nike','Reebok','Asics','Adidas','Puma'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title ?></title>
</head>
<body>
    <?php
        echo "Bonjour ".$nom."<br>";
        echo "Bienvenue sur ".$NOM_SITE. "<br>";
        while (isset($nom[$nb_caracteres]))
        {
            $nb_caracteres++;
        }
        echo "Votre nom comporte ".$nb_caracteres." caractères <br>";
        while (isset($Voyelles[$compteur])){
            if ($nom[0] == $Voyelles[$compteur]){
                $Voyelle_ou_consonne = TRUE;
                echo "Votre nom commence par une voyelle";
            }
            $compteur++;
        }
        if ($Voyelle_ou_consonne == FALSE){
            echo "Votre nom commence par une consonne";
        }
    ?>
</body>
</html>