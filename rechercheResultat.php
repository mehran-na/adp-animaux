<?php
    $errorMessage = "";
	if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
		$animauxTrouver = array();
		foreach ($_GET as $item) {
			array_push($animauxTrouver, $item);
		}
	}else {
		$errorMessage = "Acune Resultat";
	}
?>

<!--header-->
<?php include 'header.php' ?>

<!--body-->
<div class = "page">
    <div class = "container-b">
        <?php if($errorMessage == "" ){ ?>
	    <?php foreach ($animauxTrouver as $animal){ ?>
        <div class = "bo-1">
            <ul>
                <li><?php echo "<strong>Nom :</strong>" . $animal[1]; ?></li>
                <li><?php echo "<strong>Type :</strong>" . $animal[2]; ?></li>
                <br>
                <li>
                    Pour plus informations veuillez voire ma page
                    : <?php echo "<a href = 'animalInfo.php?" . http_build_query($animal) . "'>Click ici</a></p>"; ?>
                </li>
            </ul>
        </div>
	    <?php }}else{echo $errorMessage;} ?>
    </div>
</div>

<!--footer-->
<?php include 'footer.php' ?>

