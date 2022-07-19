<?php 
	try {
		
		$bdd = new PDO('mysql:host=localhost;charset=utf8;dbname=sabbat', 'root', '');
	} catch (Exception $e) {
		die('Erreur '.$e->getMessage());
	}
		// $information = $bdd->query('SELECT * FROM eleves WHERE id="'.$_GET['id'].'" OR pseudo="'.$_GET['pseudo'].'"');
	// $information = $bdd->query('SELECT * FROM article ORDER BY id DESC');
	$information = $bdd->query('SELECT id1, contenu, titre, auteur_id, prenom, nom FROM auteur INNER JOIN article ON auteur.id = article.auteur_id');
	// $information->execute([$_POST['id'], $_POST['pseudo']]);
		
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="defaut.css">
	<title>La base de données</title>
</head>
<body>
	<h2>Les dernières information</h2>
	<!-- <form method="post" action="index1.php">
		<label for="nom">Rechercher</label>
		<p><input type="text" name="pseudo" id="nom"></p>
		<p><input type="text" name="id" id="nom"></p>
		<input type="submit" name="">
	</form> -->

	<?php 
	while ($article = $information->fetch()) {
		?>
		<div id="contenu">
			<h5><?php echo htmlspecialchars($article['titre']); ?></h5>
			<a href="articles.php?billet=<?php echo $article['id1']; ?>">Voir l'article</a>
		</div>
			
		<?php
	}

	 ?>

	 <?php  ?>
	 <?php  ?>
</body>
</html>