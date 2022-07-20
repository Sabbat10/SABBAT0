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

	class Voiture
	{

		private $_nom;
		private $_couleur;
		private $_modele;

		//Les contruceteurs

		public function __construct($nom = 'Tesla', $couleur = 'noire', $modele = 'S-16')
		{
			$this->setNom($nom);
			$this->setCouleur($couleur);
			$this->setModele($modele);
		}

		//getter
		public function getNom()
		{
			return $this->_nom;
		}
		public function getCouleur()
		{
			return $this->_couleur;
		}
		public function getModele()
		{
			return $this->_modele;
		}

		//Setter

		public function setNom($newNom)
		{
			$this->_nom = $newNom;
		}
		public function setCouleur($newCouleur)
		{
			$this->_couleur = $newCouleur;
		}
		public function setModele($newModele)
		{
			$this->_modele = $newModele;
		}

		function souhait($annees = '2 ans', $mois = 'Juin')
		{
	?>
			<p>Je souhaite acheter un <strong><i class="ss"><?php echo $this->getNom(); ?></i></strong> de la couleur <strong><i class="ss"><?php echo $this->getCouleur(); ?></i></strong> modèle <strong><i class="ss"><?php echo $this->getModele(); ?></i><?php echo ' dans ' . $annees . ' au mois de ' . $mois ?></strong></p>
	<?php

		}
	}
	$sabbat = new Voiture('RAV-4', 'Rouge', 'V8');
	// $sabbat->setNom('RAV-4');
	// $sabbat->setCouleur('Blue-Ciel');
	$sabbat->souhait('5 ans', 'Decembre');

	$alliance = new Voiture();
	$alliance->souhait();

	$daniela = new Voiture('Trasco', 'Blanche', 'FT',);
	$daniela->souhait('5 mois', 'Novembre');



	//////////////////////////////////////////////////////////////////////////////////////////////////////////////

	class Humain
	{

		private $vivant = true;

		public function riche()
		{
			echo 'Je suis riche !';
		}

		public function sante()
		{
			echo ' Je suis en bonne sante !<br>';
		}
	}

	class Mark extends Humain
	{
	}

	class Patrice extends Humain
	{

		private $vivant = false;

		public function sante()
		{
			echo ' Je ne suis pas en bonne sante !';
		}
	}

	$mark = new Mark();
	$mark->riche() . ' et ' . $mark->sante();

	$patrice = new Patrice();
	$patrice->riche() . '' . $patrice->sante();



	?>
</body>

</html>