<?php include 'process.php' ?>
<?php
	//$animaux
	//$_POST["chercherMot"]
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$resultats = array();
		for ($i = 0 ; $i < count($animaux) ; $i++) {
			for ($j = 0 ; $j < count($animaux[$i]) ; $j++) {
				if ($animaux[$i][$j] == $_POST["chercherMot"]) {
					array_push($resultats, $animaux[$i]);
				}
			}
		}
		header("Location: rechercheResultat.php?" . http_build_query($resultats), true, 303);
	}
?>

<!DOCTYPE html>
<html lang = "fr">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width , inicial-scale=1">
        <meta name = "keywords" content = "sport,football,hocky,montreal, impact, nouvelles,français">
        <title>Adoption d'animaux</title>
        <link rel = "stylesheet" href = "Styles/reset.css">
        <link rel = "stylesheet" href = "Styles/pages.css">
    </head>
    <body>
        <div id = "main">
            <header>
                <div class = "top-bar">

                    <div class = "socials">
                        <ul>
                            <li><a href = "https://telegram.org/"><img src = "Images/Telegram.png" alt = "Telegram"></a>
                            </li>
                            <li><a href = "https://www.facebook.com/"><img src = "Images/Facebook.png" alt = "facebook"></a>
                            </li>
                            <li><a href = "https://twitter.com/login"><img src = "Images/Twitter.png"
                                                                           alt = "Twitter"></a></li>
                        </ul>
                    </div>
                    <!--logo-->
                    <div class = "logo">
                        <a href = "index.php"><img src = "Images/pet-logo.png" alt = "Logo"></a>
                    </div>
                    <!--boite de recherche-->
                    <!--<div class = "search">
                        <label for = "chercher"></label>
                        <input type = "text" name = "search-input" placeholder = "Chercher..." id = "chercher">
                        <a href = "#" class = "search-btn"></a>
                    </div>-->
                </div>
                <!--menu-->
                <div class = "top-menu">
                    <nav>
                        <ul>
                            <li><a href = "index.php">Accueil</a></li>
                            <li><a href = "formulaire.php">Formulaire</a>
                            <li><a href = "rechercheResultat.php">Recherch Resultat</a>
                            <li><a href = "animalInfo.php">Animal info</a>
                            <li><a href = "confirmation.php">Confirmation</a>

                            <li>
                        </ul>
                    </nav>

                    <form action = "#" method = "post" class = "form1">
                        <label for = "cherche"></label>
                        <input type = "search" id = "cherche" placeholder = "Checher animal" name = "chercherMot">
                        <button class = "chercheBtn">Cherche</button>
                    </form>
                </div>
            </header>

