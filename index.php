<?php

/*	$arrFile = file("./animaux.csv");

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
	$anim5 = $animaux[$rands[4]];*/
?>
<?php include 'process.php'?>

<!--Header-->
<?php include 'header.php' ?>

<!--body de la page-->
<div class = "page">

    <div class = "post">

        <div class = "container-a">
            <div class = "bo-head">
                <h3><?php echo "Mon nom est : " . $anim1[1]; ?></h3>
                <p><?php echo "Mon type est : " . $anim1[2]; ?></p>
                <p>Pour plus informations veuillez voire ma page
                    : <?php echo "<a href = 'animalInfo.php?" . http_build_query($anim1) . "'>Click ici</a></p>"; ?>
            </div>

        </div>
        <div class = "container-b">
            <div class = "bo-1">
                <h3><?php echo "Mon nom est : " . $anim2[1]; ?></h3>
                <p><?php echo "Mon type est : " . $anim2[2]; ?></p>
                <p>Pour plus informations veuillez voire ma page
                    : <?php echo "<a href = 'animalInfo.php?" . http_build_query($anim2) . "'>Click ici</a></p>"; ?>
            </div>
            <div class = "bo-2">
                <h3><?php echo "Mon nom est : " . $anim3[1]; ?></h3>
                <p><?php echo "Mon type est : " . $anim3[2]; ?></p>
                <p>Pour plus informations veuillez voire ma page
                    : <?php echo "<a href = 'animalInfo.php?" . http_build_query($anim3) . "'>Click ici</a></p>"; ?>
            </div>
        </div>
        <div class = "container-c">
            <div class = "bo-1">
                <h3><?php echo "Mon nom est : " . $anim4[1]; ?></h3>
                <p><?php echo "Mon type est : " . $anim4[2]; ?></p>
                <p>Pour plus informations veuillez voire ma page
                    : <?php echo "<a href = 'animalInfo.php?" . http_build_query($anim4) . "'>Click ici</a></p>"; ?>
            </div>
            <div class = "bo-2">
                <h3><?php echo "Mon nom est : " . $anim5[1]; ?></h3>
                <p><?php echo "Mon type est : " . $anim5[2]; ?></p>
                <p>Pour plus informations veuillez voire ma page
                    : <?php echo "<a href = 'animalInfo.php?" . http_build_query($anim5) . "'>Click ici</a></p>"; ?>
            </div>
        </div>
    </div>

</div>

<!--footer-->
<?php include 'footer.php' ?>
