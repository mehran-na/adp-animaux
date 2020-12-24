<?php include 'header.php' ?>
<div class = "page">
    <form action = "formulaireActions.php" method = "post" id="formulaire">
        <div>
            <label for = "nom">Entrez le nom de l'animal : </label>
            <input type = "text" name = "nom" id = "nom">
            <span style = "color:red" id = "error_nom"></span>
            <br><br>

            <label for = "prenom">Entrez le type de l'animal : </label>
            <input type = "text" name = "type" id = "type">
            <span style = "color:red" id = "error_type"></span>
            <br><br>

            <label for = "prenom">Entrez la race de l'animal : </label>
            <input type = "text" name = "race" id = "race">
            <span style = "color:red" id = "error_race"></span>
            <br><br>

            <label for = "quantity">Entrez l'age de l'animal :</label>
            <input type = "number" id = "age" name = "age" min = "1" max = "30">
            <span style = "color:red" id = "error-age"></span>
            <br><br>

            <label for="desc">Entrez description de l'animal:</label><br>
            <textarea id="desc" name="desc" rows="4" cols="50"></textarea>
            <span style = "color:red" id = "error-desc"></span>
            <br><br>

            <label for = "courriel">Enrez votre courriel : </label>
            <input type = "email" name="courriel" id="courriel">
            <span style = "color:red" id = "error-courriel"></span>
            <br><br>

            <label for = "nom">Entrez votre adresse civique : </label>
            <input type = "text" name = "adresse" id = "adresse-civique">
            <span style = "color:red" id = "error-adresse-civique"></span>
            <br><br>

            <label for = "nom">Entrez votre ville : </label>
            <input type = "text" name = "ville" id = "ville">
            <span style = "color:red" id = "error-ville"></span>
            <br><br>

            <label for = "nom">Entrez votre codepostal : </label>
            <input type = "text" name = "cp" id = "codepostal">
            <span style = "color:red" id = "error-codepostal"></span>
            <br><br><br>

            <input type = "submit" value = "Envoyer">
        </div>
    </form>
    <script src="JS/validation.js"></script>
</div>
<?php include 'footer.php'?>