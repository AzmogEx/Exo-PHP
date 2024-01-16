<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title ?></title>
</head>
<body>
    
</body>
</html>
<?php 
    $title= "Exo5";
    include('inc/commun.inc.php');
?>

<form action="exo5.php" method="post">  
    <input type="text" name="marque">
    <input type="submit" value="Enregistrer">
</form>

<?php
    if (isset($_POST['marque'])){
        $marque= $_POST['marque'];
        echo $marque;
    }

    echo "<br>"; 
    include('inc/footer.inc.php');
?>