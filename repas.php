<?php
	//Variables :
	$nomParent = "";
	$nomParentErr = "";

	$nomEnfant = "";
	$nomEnfantErr = "";

	$nomEcole = "";
	$nomEcoleErr = "";

	$ageEnfant = 0;
	$ageEnfantErr = "";

	$lundiRepas = "";
	$lundiErr = "";

	$mardiRepas = "";
	$mardiErr = "";

	$mercrediRepas = "";
	$mercrediErr = "";

	$jeudiRepas = "";
	$jeudiErr = "";

	$vendrediRepas = "";
	$vendrediErr = "";

	$estCorrect = "";

    //Verifier virgule :
	function avoirVirgule($nom){
	    $pattern = "/,/";
		return (preg_match($pattern, $nom)) ?  true :  false;
	}
	//Vérifier age :
    function estValideAge($age){
	    return ($age >= 4 && $age <= 12 ) ? true : false;
    }

	//Si fait submit :
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	    //Verifier nom parent :
	    if (empty($_POST["nomParent"])) {
	        $nomParentErr = "nom parent est obligatoir";
	    }else{
	        $nomParent = $_POST["nomParent"];
	        if(avoirVirgule($nomParent)){
	            $nomParentErr = "Le nom du parent ne peux pas avoire virgule";
            }
        }

	    //Verifier nom enfant :
		if (empty($_POST["nomEnfant"])) {
			$nomEnfantErr = "nom d'enfant est obligatoir";
		}else{
		    $nomEnfant = $_POST["nomEnfant"];
			if(avoirVirgule($nomEnfant)){
				$nomEnfantErr = "Le nom d'enfant' ne peux pas avoire virgule";
			}
		}

		//Verifier nom école :
		if (empty($_POST["nomEcole"])) {
			$nomEcoleErr = "nom école est obligatoir";
		}else{
		    $nomEcole = $_POST["nomEcole"];
			if(avoirVirgule($nomEcole)){
				$nomEcoleErr = "Le nom de l'école ne peux pas avoire virgule";
			}
		}

		//Verifier l'age :
		if(empty($_POST["age"])){
		    $ageEnfantErr = "Age de votre enfant est obligatoire";
        }else{
		    $ageEnfant = $_POST["age"];
		    if(!estValideAge($ageEnfant)){
		        $ageEnfantErr = "Age de votre enfant il faut être entre 4 et 12";
            }
        }

		//Verifier repas :

        //lundi
		if(empty($_POST["lundi"])){
		    $lundiErr = " (il faut choisir le repas pour lundi !)";
        }else{
		    $lundiRepas = $_POST["lundi"];
        }

		//mardi
		if(empty($_POST["mardi"])){
		    $mardiErr = " (il faut choisir le repas pour mardi !)";
        }else{
			$mardiRepas = $_POST["mardi"];
		}
		//mercredi
		if(empty($_POST["mercredi"])){
			$mercrediErr = " (il faut choisir le repas pour mercredi !)";
		}else{
		    $mercrediRepas = $_POST["mercredi"];
        }
		//jeudi
		if(empty($_POST["jeudi"])){
			$jeudiErr = " (il faut choisir le repas pour jeudi !)";
		}else{
		    $jeudiRepas = $_POST["jeudi"];
        }
		//vendredi
		if(empty($_POST["vendredi"])){
			$vendrediErr = " (il faut choisir le repas pour vendredi !)";
		}else{
		    $vendrediRepas = $_POST["vendredi"];
        }
		
		//confirmation :
		if ($nomParentErr == "" && $nomEnfantErr == "" && $nomEcoleErr == "" && $ageEnfantErr == "" && $lundiErr == "" && $mardiErr == "" && $mercrediErr == "" && $jeudiErr == "" && $vendrediErr == "") {

				file_put_contents("registration.txt", "Parent : {$nomParent}, Enfant : {$nomEnfant}, Age : {$ageEnfant}, Ecole : {$nomEcole}, Lundi : {$lundiRepas}, Mardi : {$mardiRepas}, Mercredi : {$mercrediRepas}, Jeudi : {$jeudiRepas}, Vendredi : {$vendrediRepas} \n\n", FILE_APPEND);

			header("Location: confirmation.php?np={$nomParent}&ne={$nomEnfant}&age={$ageEnfant}&ecole={$nomEcole}&l={$lundiRepas}&ma={$mardiRepas}&mer={$mercrediRepas}&j={$jeudiRepas}&v={$vendrediRepas}", true, 303);
			exit;
		}
	}
?>


<!DOCTYPE html>
<html lang = "fr">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width , inicial-scale=1">
        <title>Mehran Info</title>
        <link href = 'http://fonts.googleapis.com/css?family=Open+Sans' rel = 'stylesheet' type = 'text/css'>
        <link rel = "stylesheet" href = "Styles/reset.css">
        <link rel = "stylesheet" href = "Styles/pages.css">
    </head>
    <body>
        <div id = "main">
            <!--header-->
			<?php include 'header.php' ?>
            <div class = "page">


                <!--formulaire-->
                <div id = "formulaire">
                    <form action = "repas.php" method = "POST">
                        <fieldset>
                            <label for = "nom-parent">Nom du parent <sup>*</sup></label><br>
                            <input name = "nomParent" id = "nom-parent" placeholder = "Mehran Nazemi" value="<?php echo $nomParent?>" />
                            <span class="error"><?php echo $nomParentErr;?></span>
                            <br><br>

                            <label for = "nom-enfant">Nom de l'enfant <sup>*</sup></label><br>
                            <input name = "nomEnfant" id = "nom-enfant" placeholder = "Kian Nazemi" value="<?php echo $nomEnfant?>" />
                            <span class="error"><?php echo $nomEnfantErr; ?></span>
                            <br><br>
                            
                            <label for = "nom-ecole">Nom de l'école <sup>*</sup></label><br>
                            <input name = "nomEcole" id = "nom-ecole" placeholder = "UQAM" value="<?php echo $nomEcole ?>"/>
                            <span class="error"><?php echo $nomEcoleErr; ?></span>
                            <br><br>

                            <label for = "age">age (entre 4 et 12):<sup>*</sup></label><br>
                            <input type = "number" id = "age" name = "age" min = "4" max = "12"  value="<?php if($ageEnfant != 0) echo $ageEnfant ?>">
                            <span class="error"><?php echo $ageEnfantErr; ?></span>
                            <br><br>

                            <h2>Choisir le repas pour chaque jour :<sup>*</sup></h2>
                            <!--Lundi-->
                            <h3>Lundi<span class="error"><?php echo $lundiErr;?></span></h3>
                            <div class = "container-1">
                                <input type = "radio" name = "lundi" value = "poisson croustillant" id = "l1" <?php if(isset($lundiRepas) && $lundiRepas == "poisson croustillant") echo "checked"?>>
                                <label for = "l1">
                                    <div class = "box-1">
                                        <img class = "img-repas" src = "Images/poisson-croustillant.png"
                                             alt = "poisson croustillant">
                                        <h4>Poisson Croustillant</h4>
                                        <p>Un plat de poisson croustillant avec des latiue et citron</p>
                                    </div>
                                </label>
                                <input type = "radio" name = "lundi" value = "poulet bbq" id = "l2" <?php if(isset($lundiRepas) && $lundiRepas == "poulet bbq") echo "checked"?>>
                                <label for = "l2">
                                    <div class = "box-2">
                                        <img class = "img-repas" src = "Images/poulet-bbq.png"
                                             alt = "poulet bbq">
                                        <h4>Poulet BBQ</h4>
                                        <p>poulet bbq avec des riz, au brocoli, aux carottes et au chou-fleur est l'aliment parfait pour votre enfant </p>
                                    </div>
                                </label>
                            </div>
                            <!--Mardi-->
                            <h3>Mardi<span class="error"><?php echo $mardiErr;?></span></h3>
                            <div class = "container-2">
                                <input type = "radio" name = "mardi" value = "Spaghetti" id = "ma1" <?php if(isset($mardiRepas) && $mardiRepas == "Spaghetti") echo "checked"?>>
                                <label for = "ma1">
                                    <div class = "box-1">
                                        <img class = "img-repas" src = "Images/Spaghetti.png"
                                             alt = "Spaghetti">
                                        <h4>Spaghetti</h4>
                                        <p>Spaghetti avec une sauce italienne spéciale que tous les enfants adorent</p>
                                    </div>
                                </label>
                                <input type = "radio" name = "mardi" value = "Steak" id = "ma2" <?php if(isset($mardiRepas) && $mardiRepas == "Steak") echo "checked"?>>
                                <label for = "ma2">
                                    <div class = "box-2">
                                        <img class = "img-repas" src = "Images/Steak.png"
                                             alt = "Steak">
                                        <h4>Steak</h4>
                                        <p>Un steak spécial avec des légumes et un œuf à côté, qui contient les protéines et les vitamines nécessaires.</p>
                                    </div>
                                </label>
                            </div>
                            <!--Mercredi-->
                            <h3>Mercredi<span class="error"><?php echo $mercrediErr;?></span></h3>
                            <div class = "container-3">
                                <input type = "radio" name = "mercredi" value = "latiue salade" id = "me1" <?php if(isset($mercrediRepas) && $mercrediRepas == "latiue salade") echo "checked"?>>
                                <label for = "me1">
                                    <div class = "box-1">
                                        <img class = "img-repas" src = "Images/latiue salade.png"
                                             alt = "latiue salade">
                                        <h4>Latiue Salade</h4>
                                        <p>Salade fraîche qui contient de la laitue, du concombre, de la tomate et de l'oignon et qui contient toutes les vitamines nécessaires pour votre enfant</p>
                                    </div>
                                </label>
                                <input type = "radio" name = "mercredi" value = "Spring salade" id = "me2" <?php if(isset($mercrediRepas) && $mercrediRepas == "Spring salade") echo "checked"?>>
                                <label for = "me2">
                                    <div class = "box-2">
                                        <img class = "img-repas" src = "Images/Spring salade.png"
                                             alt = "Spring salade">
                                        <h4>Spring Salade</h4>
                                        <p>Le mélange de printemps est composé de 16 légumes verts frais et de laitues de goûts et de textures variés, y compris la romaine rouge, les jeunes épinards, le radicchio, la romaine verte, la feuille de chêne rouge, le mizuna, la feuille rouge, le lollo rosso, la roquette, la moutarde rouge.</p>
                                    </div>
                                </label>
                            </div>
                            <!--Jeudi-->
                            <h3>Jeudi<span class="error"><?php echo $jeudiErr;?></span></h3>
                            <div class = "container-4">
                                <input type = "radio" name = "jeudi" value = "poulet avec des riz" id = "j1" <?php if(isset($jeudiRepas) && $jeudiRepas == "poulet avec des riz") echo "checked"?>>
                                <label for = "j1">
                                    <div class = "box-1">
                                        <img class = "img-repas" src = "Images/poulet avec des riz.png"
                                             alt = "poulet avec des riz">
                                        <h4>Poulet avec des Riz</h4>
                                        <p>Poulet cuit avec du riz, qui fournit les protéines et les vitamines dont vos enfants ont besoin.</p>
                                    </div>
                                </label>
                                <input type = "radio" name = "jeudi" value = "Poulet avec des frites" id = "j2" <?php if(isset($jeudiRepas) && $jeudiRepas == "Poulet avec des frites") echo "checked"?>>
                                <label for = "j2">
                                    <div class = "box-2">
                                        <img class = "img-repas" src = "Images/Poulet avec des frites.png"
                                             alt = "Poulet avec des frites">
                                        <h4>Poulet avec des Frites</h4>
                                        <p>Poulet cuit avec des frites, qui fournit les protéines et les vitamines dont vos enfants ont besoin.</p>
                                    </div>
                                </label>
                            </div>
                            <!--Vendredi-->
                            <h3>Vendredi<span class="error"><?php echo $vendrediErr;?></span></h3>
                            <div class = "container-5">
                                <input type = "radio" name = "vendredi" value = "Poisson avec salade" id = "v1" <?php if(isset($vendrediRepas) && $vendrediRepas == "Poisson avec salade") echo "checked"?>>
                                <label for = "v1">
                                    <div class = "box-1">
                                        <img class = "img-repas" src = "Images/Poisson avec salade.png"
                                             alt = "Poisson avec salade">
                                        <h4>Poisson avec Salade</h4>
                                        <p>Dans cette assiette, votre enfant aura du poisson et des salades nécessaires à la santé du corps des enfants</p>
                                    </div>
                                </label>
                                <input type = "radio" name = "vendredi" value = "Poisson avec salade et frites" id = "v2" <?php if(isset($vendrediRepas) && $vendrediRepas == "Poisson avec salade et frites") echo "checked"?>>
                                <label for = "v2">
                                    <div class = "box-2">
                                        <img class = "img-repas" src = "Images/Poisson avec salade et frites.png"
                                             alt = "Poisson avec salade et frites">
                                        <h4>Poisson avec Salade et Frites</h4>
                                        <p>Dans cette assiette, votre enfant aura du poisson et une salade avec des frites, que tous les enfants adorent.</p>
                                    </div>
                                </label>
                            </div>

                            <input id = "button" type = "submit" name = "submit" value = "Envoyez!"/>
                            <p><sup>* </sup>indique un champ requis.</p>
                        </fieldset>
                    </form>
                </div>
            </div>
            <!--footer-->
			<?php include 'footer.php' ?>
        </div>
    </body>
</html>
