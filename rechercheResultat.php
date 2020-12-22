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
                <h3><?php echo "nom est : " . $animal[1]; ?></h3>
                <p><?php echo "Description : " . $animal[5]; ?></p>
                <p>Pour plus informations veuillez voire ma page
                : <?php echo "<a href = 'animalInfo.php?" . http_build_query($animal) . "'>Click ici</a></p>"; ?>
        </div>
	    <?php }}else{echo $errorMessage;} ?>
    </div>
</div>

<!--footer-->
<?php include 'footer.php' ?>

