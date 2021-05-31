<?php
// Sous WAMP
//$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');

if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['age']))
    echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !<br />';
else
{
   echo 'Il faut renseigner un nom, un prénom et un nombre de répétitions !';
}
?>
