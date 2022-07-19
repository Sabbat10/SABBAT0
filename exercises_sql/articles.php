<?php 
	//Connexion a la bdd
	require('connnexionBdd.php');
		// $information = $bdd->query('SELECT * FROM eleves WHERE id="'.$_GET['id'].'" OR pseudo="'.$_GET['pseudo'].'"');
	// $requete = $bdd->prepare
	$requete = $bdd->prepare('SELECT contenu, titre, auteur_id, prenom, nom FROM auteur INNER JOIN article ON auteur.id = article.auteur_id WHERE id1 = ?');
	$requete->execute([$_GET['billet']]);

// $requete = $bdd->query('SELECT * FROM auteur RIGHT JOIN article ON auteur.id = article.auteur_id');

		
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="defaut.css">
	<title>Lecture de l'article</title>
</head>
<body>
	<h2>Les dernières information</h2>
	<!-- <p>RECHERCHE</p>
	<form method="post" action="index1.php">
		<label for="nom">Rechercher</label>
		<p><input type="text" name="pseudo" id="nom"></p>
		<p><input type="text" name="id" id="nom"></p>
		<input type="submit" name="">
	</form> -->
<?php 
	
	while ($article = $requete->fetch()) {
		?>

		<div id="contenu">
			<h3><?php echo $article['titre']; ?></h3>
			<p><?php echo $article['contenu']; ?></p>
			<p><em><strong><a href=""><?php echo $article['prenom'].' '.$article['nom']; ?></a></strong></em></p>
		</div>

		<?php
	}


 ?>
	
</body>
</html>