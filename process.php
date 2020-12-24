<?php
	/*
	 * Supprimer les lignes vide du fichier "animaux.csv"
	 **/
	$contents = file_get_contents('animaux.csv');
	$contents = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $contents);

	/*
	 * Ajouter une ligne vide à la fin de fichier "animaux.csv"
	 * (preparer pour la prochain animal pour ajouter dans le ficher)
	 * */
	if (substr($contents, -1) != "\n") {
	    $contents .= "\n";
	}

	/*
	 * Lire le fichier "animaux.csv" et preparer un tableau des animaux
	 * */
	file_put_contents('animaux.csv', $contents);
	$animaux = array();
	$file = fopen('animaux.csv', "rb");
	$counter = 0;
	while (!feof($file)) {
		$animal = fgetcsv($file);
		if($animal == false || $counter == 0){ //empty
			$counter++;
			continue;
		}else{
			$counter++;
			if (count($animal) == 10) {
				array_push($animaux, $animal);
			}
		}
	}

	/*
	 * algorithm pour choisir 5 animaux par hasard sans répétition
	 * */
	$rands = array();
	$unique = true;
	while (count($rands) != 5) {
		$value = rand(0, count($animaux)-1);
		if(count($rands) == 0){
			array_push($rands, $value);
		}else{
			$test = false;
			foreach ($rands as $item){
				if ($value == $item) {
					$test = true;
				    break;
				}
			}
			if(!$test){
				array_push($rands, $value);
			}
		}
	}
	/*
	 * 5 animaux pour afficher sur accueil
	 * */
	$anim1 = $animaux[$rands[0]];
	$anim2 = $animaux[$rands[1]];
	$anim3 = $animaux[$rands[2]];
	$anim4 = $animaux[$rands[3]];
	$anim5 = $animaux[$rands[4]];
?>
