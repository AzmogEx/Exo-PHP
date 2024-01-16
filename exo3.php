<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title ?></title>
</head>
<body>
    <?php 
    $title= "Exo3";
    $Nom = "Marco";
    $Nom_Site="Php";
    
    echo "Bonjour ".$Nom.".<br> Bienvenue sur ".$Nom_Site.".";

    $index = 0;
    while(isset($Nom[$index])){
        $index ++;
    }
    
    echo "<br>Votre nom à $index lettres<br/>";

    switch ($Nom[0]) {
        case 'A':
         case 'E':
          case 'I':
              case 'O':
                  case 'U':
                      case 'Y':
                          echo 'Votre nom commence par une voyelle.<br/>';
                          break;
                          default;
                          echo 'Votre nom commence par une consonne.<br/>';
     }
      ?>
</body>
</html>