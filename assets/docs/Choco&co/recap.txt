<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html" ; charset="utf-8" />
	<title>Recapitulatif commande Choco & Co</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<?php
	$px_petitoeuf = $_POST['oeuf_petit'] * $_POST['px_oeufs_petit'];
	$px_moyenoeuf = $_POST['oeuf_moyen'] * $_POST['px_oeufs_moyen'];
	$px_grandoeuf = $_POST['oeuf_grand'] * $_POST['px_oeufs_grand'];
	$px_poule = $_POST['poule'] * $_POST['px_poule'];
	$px_lapin = $_POST['lapin'] * $_POST['px_lapin'];
	$px_canard = $_POST['canard'] * $_POST['px_canard'];
	$px_assort_friture = $_POST['px_assort'] * $_POST['qte_assort'];

	$total_oeuf = $px_petitoeuf + $px_moyenoeuf + $px_grandoeuf;
	$total_animaux = $px_poule + $px_lapin + $px_canard;
	$total = $px_petitoeuf + $px_moyenoeuf + $px_grandoeuf + $px_poule + $px_lapin + $px_canard + $px_assort_friture;

	if (isset($_POST['figures'])) {
		$friture = $_POST['figures'];
	}

	echo "<h1> Recapitulatif de la commande </h1>";

	//Vos informations			
	echo "<h2>Votre adresse de livraison</h2>";
	echo "<p>Nom : " . $_POST['nom'];
	echo "<br> Prenom : " . $_POST['prenom'];
	echo "<br> Adresse : " . $_POST['adresse'];

	if (!empty($_POST['complement'])) {
		echo "<br> Complement d'adresse : " . $_POST['complement'];
	}

	echo "<br> Ville : " . $_POST['ville'];
	echo "<br> Code Postal : " . $_POST['cp'] . "</br>";

	if (isset($_POST['cadeau'])) {
		echo "<br> Paquet cadeau gratuit !";
	}


	//Coordonnées	
	if (!empty($_POST['tel']) || !empty($_POST['mail'])) {
		echo "<h2>Vos coordonnées</h2>";
		echo "<center><ul>";
		if (!empty($_POST['tel'])) {
			echo "<li>Téléphone : " . $_POST['tel'] . "</li>";
		}
		if (!empty($_POST['mail'])) {
			echo "<li> Email : " . $_POST['mail'] . "</li>";
		}
		echo "</ul></center>";
	}


	//Votre commande
	echo "<h2>Votre commande</h2>";

	//Oeufs en chocolat		
	if (!empty($_POST['oeuf_petit']) || !empty($_POST['oeuf_moyen']) || !empty($_POST['oeuf_grand'])) {
		echo "<h3>Oeufs en chocolat</h3>";
		echo "<center><table><tr>";
		echo "<th> Article </th>";
		echo "<th> Quantité </th>";
		echo "<th> Prix TTC </th></tr>";

		if (!empty($_POST['oeuf_petit'])) {
			echo "<tr><td> Petit paquet (150 g)</td>";
			echo "<td>" . $_POST['oeuf_petit'] . "</td>";
			echo "<td>" . $px_petitoeuf . "</td></tr>";
		}
		if (!empty($_POST['oeuf_moyen'])) {
			echo "<tr><td> Paquet moyen (300 g)</td>";
			echo "<td>" . $_POST['oeuf_moyen'] . "</td>";
			echo "<td>" . $px_moyenoeuf . "</td></tr>";
		}
		if (!empty($_POST['oeuf_grand'])) {
			echo "<tr><td> Grand paquet (500 g)</td>";
			echo "<td>" . $_POST['oeuf_grand'] . "</td>";
			echo "<td>" . $px_grandoeuf . "</td></tr></table>";
		}
		echo "<br>Total : " . $total_oeuf . " €</center>";
	}


	//Animaux en chocolat	
	if (!empty($_POST['poule']) || !empty($_POST['lapin']) || !empty($_POST['canard'])) {
		echo "<h3>Animaux en chocolat</h3>";
		echo "<center><table><tr>";
		echo "<th> Article </th>";
		echo "<th> Quantité </th>";
		echo "<th> Prix TTC </th></tr>";

		if (!empty($_POST['poule'])) {
			echo "<tr><td> Poule (100 g)</td>";
			echo "<td>" . $_POST['poule'] . "</td>";
			echo "<td>" . $px_poule . "</td></tr>";
		}
		if (!empty($_POST['lapin'])) {
			echo "<tr><td> Lapin (90 g)";
			echo "<td>" . $_POST['lapin'] . "</td>";
			echo "<td>" . $px_lapin . "</td></tr>";
		}
		if (!empty($_POST['canard'])) {
			echo "<tr><td> Canard (120 g)</td>";
			echo "<td>" . $_POST['canard'] . "</td>";
			echo "<td>" . $px_canard . "</td></tr></table>";
		}
		echo "<br>Total : " . $total_animaux . " €</center>";
	}


	//Assortiment personnalisé			
	if (isset($friture) && count($friture) != 0) {
		echo "<h3>Assortiment personnalisé</h3>";
		echo "<center><table><tr>";
		echo "<th> Article </th>";
		echo "<th> Quantité </th>";
		echo "<th> Prix TTC </th></tr>";
		echo "<tr><td> Assortiment de friture</td>";
		echo "<td>" . $_POST['qte_assort'] . "</td>";
		echo "<td>" . $px_assort_friture . "€</td></tr></table>";

		echo "<h3> Contenu de l'assortiment </h3>";
		foreach ($friture as $valeur) {
			echo "<center>- " . $valeur . "<br></center>";
		}
	}

	echo "<br><p>Remarque : Si vous ne désirez pas personnaliser votre assortiment, nous vous enverrons l'ensemble des figures.</p>";
	echo "<hr>";

	//Prix total
	echo "<p> Total de la commande : " . $total . " €</p>";
	?>

	<body>
		<html>