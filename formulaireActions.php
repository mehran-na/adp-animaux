<?php
	include 'process.php';
	$succes = false;
	if (isset($_POST)) {
		$nom = $_POST["nom"];
		$type = $_POST["type"];
		$race = $_POST["race"];
		$age = $_POST["age"];
		$description = $_POST["desc"];
		$courriel = $_POST["courriel"];
		$adresse = $_POST["adresse"];
		$ville = $_POST["ville"];
		$codepostal = $_POST["cp"];
		if (!empty($nom) && !empty($type) && !empty($race) && !empty($age) && !empty($description) && !empty($courriel) && !empty($adresse) && !empty($ville) && !empty($codepostal)) {
			//trouver l'id de dernier animal dans le fichier "animaux.csv"
			$lastId = $animaux[count($animaux) - 1][0];
			$lastIdArr = str_split($lastId);
			$LastDigitStr = "";
			for ($i = 1 ; $i < count($lastIdArr) ; $i++) {
				$LastDigitStr .= $lastIdArr[$i];
			}

			//créer un nouvel id pour notre animal
			$newIdNumber = (int)$LastDigitStr + 1;
			$newId = "X" . strval($newIdNumber);

			//Écrire notre animal à la fin du fichier "animaux.csv"
			$donnees = array();
			array_push($donnees, $newId, $nom, $type, $race, $age, $description, $courriel, $adresse, $ville, $codepostal);
			$file = fopen("animaux.csv", "a");
			fwrite($file, implode(",", $donnees));
			fclose($file);

			//l'écriture a réussi
			$succes = true;
		}
	}
	//redirect au fichier "confirmation.php"
	header("Location: confirmation.php?succes={$succes}", true, 303);
?>
