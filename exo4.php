<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title ?></title>
    <style>
    table {border-collapse:collapse;}
    table, td, th {border: 1px solid black;}
    td,th {padding: 4px;}
    </style>
</head>
<body>
    <?php 
    $title= "Exo4";
    $Nom = "Marco";
    $Nom_Site="Php";
    $marque = ['Nike','Reebok','Asics','Adidas','Puma'];
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
      <p>
        <table>
            <th>Marques</th>
            <?php 
            foreach($marque As $m) {
                echo "<tr><td>$m</td><tr>";
                }
            ?>
        </table>
      </p>
</body>
</html>