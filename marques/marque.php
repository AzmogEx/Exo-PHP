<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title ?></title>
</head>
<body>
    
<?php
include_once('..inc/commun.inc.php');

$numero = filter_input(INPUT_GET, 'numero', FILTER_VALIDATE_INT);


if ($numero && array_key_exists($numero, $marques)) {
    $marque = $marques[$numero];
}

?>
  <div class= "container">
        <div class="row">
            <div class="col-12">
                <?php
                if (isset($marque)){
                    echo "<h1>$marque</h1>";
                }
                else{
                    echo "Marque introuvable";
                }
                ?>
            </div>
        </div>