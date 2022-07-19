<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Les informations de l'utilisareur</title>
</head>
<body>
	<headerc class="bg-secondary">
		<?php 

			// L'image est-elle envoye ?
			if (isset($_FILES['images']) && $_FILES['images']['error'] === 0) {
				
				// L'images est-elle lourde ?
				if ($_FILES['images']['size'] <= 3000000) {
					
					$informatioImages 	= pathinfo($_FILES['images']['name']);
					$extentionImages 	= $informatioImages['extension'];
					$extentionArray 	= ['png0', 'jpg', 'gif', 'jpeg'];

					if (in_array($extentionImages, $extentionArray)){
					move_uploaded_file($_FILES['images']['tmp_name'], 'recue/'.time().rand().rand().'.'.$extentionImages);
						echo "Envoie effectuer !";
					}
				}

			}
		?>

	</header>
</body>
</html>