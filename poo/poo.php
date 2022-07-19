
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>

<?php 

	class Voiture{	

		private $_nom 		= 'Toyota';
		private $_couleur 	= 'Noire';
		private $_modele      = 'S4v';

		//getter
		public function getNom() {
			return $this->_nom;
		}
		public function getCouleur() {
			return $this->_couleur;
		}
		public function getModele() {
			return $this->_modele;
		}

		//Setter

		public function setNom($newNom) {
			$this->_nom = $newNom;
		}
		public function setCouleur($newCouleur) {
			$this->_couleur = $newCouleur;
		}
	}
	$sabbat = new Voiture();
	$alliance = new Voiture();

	$sabbat->setNom('RAV4');
	$sabbat->setCouleur('Blue-Ciel');

	?>
		<p>Je souhaite acheter un <strong><i class="ss"><?php echo $sabbat->getNom(); ?></i></strong> de la couleur <strong ><i class="ss"><?php echo $sabbat->getCouleur(); ?></i></strong> modèle <strong><i  class="ss"><?php echo $sabbat->getModele(); ?></i></strong></p>
	<?php 

	?>
		<p>Je souhaite acheter un <strong><i><?php echo $alliance->getNom(); ?></i></strong> de la couleur <strong><i><?php echo $alliance->getCouleur(); ?></i></strong> modèle <strong><i><?php echo $alliance->getModele(); ?></i></strong></p>
	<?php 

?>
</body>
</html>

