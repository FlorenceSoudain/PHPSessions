<?php
/**
 * Created by PhpStorm.
 * User: flore
 * Date: 03/01/2019
 * Time: 16:32
 */


session_start();
$_SESSION['couleur'] = $_GET['couleur'];

echo 'la couleur choisi est le '.$_SESSION['couleur'];

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Couleurs</title>
</head>
<body style="background-color: <?= $_SESSION['couleur'];?>">
<a href="script2.php">lien</a>
</body>
</html>