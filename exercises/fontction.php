<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Les Fontcions</title>
</head>
<body>
	<div class="header">
		<h3 class="text-center bg-secondary text-light">Les formulaires</h3>
	</div>
	<p class="text-center">Remplir les formualire d'inscription</p>

	<div class="text-center">
		<form method="post" action="acceui.php" enctype="multipart/form-data">
		<p>
			<label id="images" for="images">Choisisez une image :</label><br>
			<input type="file" name="images" id="images">
		</p>
		
		<p><input type="submit" name=""></p>
		</form>
	</div>
	<?php 



		require 'footer.php';
	 ?>
	
</body>
</html>