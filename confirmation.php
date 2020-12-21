
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , inicial-scale=1">
        <title>Mehran Info</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="Styles/reset.css">
        <link rel="stylesheet" href="Styles/pages.css">
    </head>
    <body>
        <div id="main">
            <!--Header-->
	        <?php include 'header.php' ?>
            <!-- Site Body -->
            <div id="server-reponse">
                <h4>Vos Commandes ont enregistrer avec succées</h4>
                <table class="center">
                    <tr>
                        <th>Nom du Prent</th>
                        <th>Nom de l'enfant</th>
                        <th>Nom de l'école</th>
                        <th>Age d'enfant</th>
                        <th>Repas du Lundi</th>
                        <th>Repas du Mardi</th>
                        <th>Repas du Mercredi</th>
                        <th>Repas du Jeudi</th>
                        <th>Repas du Vendredi</th>
                    </tr>
                    <tr>
                        <td><?php echo $_GET["np"]?></td>
                        <td><?php echo $_GET["ne"]?></td>
                        <td><?php echo $_GET["ecole"]?></td>
                        <td><?php echo $_GET["age"]?></td>
                        <td><?php echo $_GET["l"]?></td>
                        <td><?php echo $_GET["ma"]?></td>
                        <td><?php echo $_GET["mer"]?></td>
                        <td><?php echo $_GET["j"]?></td>
                        <td><?php echo $_GET["v"]?></td>
                    </tr>
                </table>
				<?php

				?>
            </div>
            <!--footer-->
	        <?php include 'footer.php' ?>
        </div>
    </body>

</html>
