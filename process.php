<?php

	$arrFile = file("./animaux.csv");
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
	/*echo '<pre>';
	echo 'animaux = ';
	print_r($animaux);
	echo '<pre>';*/

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
