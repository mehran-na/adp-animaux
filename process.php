<?php

	$arrFile = file("./animaux.csv");

	$animaux = array();
	for ($i = 1 ; $i < count($arrFile) ; $i++) {
		$animalArrInfo = explode(',', $arrFile[$i]);
		array_push($animaux, $animalArrInfo);
	}

	$rands = array();
	for ($i = 1 ; $i <= 5 ; $i++) {
		$value = rand(1, count($animaux) - 1);
		array_push($rands, $value);
	}
	$anim1 = $animaux[$rands[0]];
	$anim2 = $animaux[$rands[1]];
	$anim3 = $animaux[$rands[2]];
	$anim4 = $animaux[$rands[3]];
	$anim5 = $animaux[$rands[4]];
?>
