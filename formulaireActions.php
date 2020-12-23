<?php
	include 'process.php';
	if (isset($_POST)) {
		$nom = $_POST["nom"];
		$type = $_POST["type"];
		$race = $_POST["race"];
		$age = $_POST["age"];
		$description = $_POST["desc"];
		$courriel = $_POST["courriel"];
		$adresse = $_POST["adresse"];
		$ville = $_POST["ville"];
		$codepostal = $_POST["nom"];

		$lastId = $animaux[count($animaux)-1][0];
		$lastIdArr = str_split($lastId);
		$LastDigitStr = "";
		for ($i = 1; $i < count($lastIdArr) ; $i++){
		    $LastDigitStr .= $lastIdArr[$i];
		}
		$newIdNumber = (int) $LastDigitStr + 1;
		$newId = "X".strval($newIdNumber);

		$donnees = array();
		if (!empty($nom) && !empty($type) && !empty($race) && !empty($age) && !empty($description) && !empty($courriel) && !empty($adresse) && !empty($ville) && !empty($codepostal)) {
			array_push($donnees, $newId, $nom,$type,$race,$age,$description,$courriel,$adresse,$ville,$codepostal);
			$file = fopen("animaux.csv", "a");
			fputcsv($file, $donnees);
			fclose($file);
		}
	}





?>
