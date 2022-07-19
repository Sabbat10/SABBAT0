<?php 
//Connexion a la BDD
require('connnexionBdd.php');

$auteur 	= htmlspecialchars($_POST['auteur']);
$titre 		= htmlspecialchars($_POST['titre']);
$contenu 	= htmlspecialchars($_POST['contenu']);

$requete = $bdd->prepare('INSERT INTO eleves(auteur, titre, contenu) VALUES(?, ?, ?)');
$requete->execute([$auteur, $titre, $contenu]);
// $requette = $bdd->prepare('INSERT INTO user(email, password, secret) VALUES(?, ?, ?)');
// 			$requette->execute([$email, $password, $secret]);
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="defaut.css">
	<title>Insertion des donnees</title>
</head>
<body>
	<h2>Veillez écrire votre articles !</h2>
	<center>
		<form method="post" action="index1.php">
			<p>
				<label id="auteur">Nom de L'auteur :</label>
				<input type="text" name="auteur" id="auteur" required>
			</p>
			<p>
				<label id="titre">Titre de L'article :</label>
				<input type="text" name="titre" id="titre" required>
			</p>
			
			<p>
				<label id="contenu">Contenu de l'article :</label><br>
				<textarea cols="80" rows="20" name="contenu" required>
				</textarea>
			</p>
			<p><input type="submit" name=""></p>
		</form>
	</center>
</body>
</html>