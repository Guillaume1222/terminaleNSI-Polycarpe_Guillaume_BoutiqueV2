<?php
INCLUDE "connexion.php";

echo <<<HTML
<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Site & BDD</title>
</head>

<body>

<h1>Insertion </h1>
	<p>Requête permettant d'insérer le login et mdp</p>

HTML;


echo "nom ajouté ". $_GET['nom'],"\n";
echo gettype ($_GET['nom'] );

//INSERT INTO `loginMdp`(`id`, `nom`, `mdp`) VALUES ('[value-1]','[value-2]','[value-3]')
//$SQL='SELECT * FROM loginMdp';


if (isset($_GET['nom']) && isset($_GET['mdp']))
{
$SQL="INSERT INTO loginMdp (nom,mdp)".
 "VALUES ('$_GET[nom]', '$_GET[mdp]')";
echo $SQL;
if ($requete = $bdd->query($SQL)) {
    echo "<p> login et mdp bien insérée </p>";
}
else 
    echo "<p> Erreur lors de l'ajout </p>";


}  
else
echo "<p>Un ou plusieurs champs du formulaire sont manquants parmi </p>";

echo "Bravo ".$_GET['nom']. ", vous avez rejoint le club";

echo <<<HTML

<p> Pour faire beau <a href="formulaire_insert.html">lien</a>     </p>

</body>
</html>

HTML;



