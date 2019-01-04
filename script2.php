<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 04/01/2019
 * Time: 13:29
 */

session_start();
echo 'bonjour';

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Couleurs</title>
</head>
<body style="background-color: <?= $_SESSION['couleur'];?>">
</body>
</html>