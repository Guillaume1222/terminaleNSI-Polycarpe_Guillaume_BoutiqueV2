<?php
INCLUDE "connexion.php";

echo <<<HTML
<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Site_boutique</title>
</head>

<body>

<h1> Message ! </h1>
	<p>Voici votre commande</p>

HTML;


//echo "Produit demandé ". $_GET['nom_objet'],"\n";
//echo gettype ($_GET['nom_objet'] );

//INSERT INTO `loginMdp`(`id`, `nom`, `mdp`) VALUES ('[value-1]','[value-2]','[value-3]')
//$SQL='SELECT * FROM loginMdp';

//SQL="INSERT INTO guillaume (objet)".
 //"VALUES ('$_GET[nom_objet]')";

if (isset($_GET['nom_objet']))
{
 $SQL = "UPDATE stockage SET nombre = (SELECT nombre - 1 FROM stockage WHERE objet ='$_GET[nom_objet]') WHERE objet = '$_GET[nom_objet]'";

echo $SQL;
if ($requete = $bdd->query($SQL)) {
    echo "<p> l'objet commandé a bien été retiré du stock </p>";
}
else 
    echo "<p> objet non retiré  </p>";
}  
else
echo "Votre " .$_GET['nom_objet']. " demandé n'est plus en stock ";

echo <<<HTML



</body>
</html>

HTML;



