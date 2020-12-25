// Ne permet pas "Submit" si les fields ne sont pas valide
var form = document.querySelector("#formulaire");
form.addEventListener('submit', function(event){
	if(!checkRequiredFields()){
		event.preventDefault();
	}
})

//Supprimer les erreurs :
function clearErrorMessages(){
	document.getElementById("error_nom").innerHTML = "";
	document.getElementById("error_type").innerHTML = "";
	document.getElementById("error_race").innerHTML = "";
	document.getElementById("error-age").innerHTML = "";
	document.getElementById("error-desc").innerHTML = "";
	document.getElementById("error-courriel").innerHTML = "";
	document.getElementById("error-adresse-civique").innerHTML = "";
	document.getElementById("error-ville").innerHTML = "";
	document.getElementById("error-codepostal").innerHTML = "";
}

//Validation du formulaire pour ne pas etre vide et ne pas avoir de virgule
function validateInputField(inputId, spanId){
	var value = document.getElementById(inputId).value;
	if(value === null || value === ""){
		document.getElementById(spanId).innerHTML = "Ce champ doit contenir une valeur !";
		return false;
	}
	if(value.includes(",")){
		document.getElementById(spanId).innerHTML = "Ce champ ne peut pas avoir la virgule !";
		return false;
	}
	return true;
}

//Validation Nom d'animal entre 3 et 20 :
function validationNoCaracter(inputId, spanId){
	var value = document.getElementById(inputId).value;
	if (value.length < 3 || value.length > 20){
		document.getElementById(spanId).innerHTML = "Ce champ doit avoir entre 3 et 20 caractères !";
		return false;
	}
	return true;
}

//Validation Age (entre 1 et 30 ) :
function validationAge(inputId, spanId){
	var value = document.getElementById(inputId).value;
	if(value === "" || value < 0 || value > 30){
		document.getElementById(spanId).innerHTML = "L'age doit etre entre 0 et 30 !";
		return false;
	}
	return true;
}

//Validation de courriel avec Regex
function validationCourriel(inputId, spanId){
	var value = document.getElementById(inputId).value;
	var regex = /\w+@\w+\.\w+/i;
	if (!regex.test(value)) {
		document.getElementById(spanId).innerHTML = "Votre courriel n'est pas valide !";
		return false;
	}
	return true;
}

//Validation code postal avec Regex
function validationCodePostal(inputId, spanId){
	var value = document.getElementById(inputId).value;
	var regex = /^[A-Za-z]\d[A-Za-z]\s?\d[A-Za-z]\d$/i;
	if (!regex.test(value)) {
		document.getElementById(spanId).innerHTML = "Votre code postal n'est pas valide !";
		return false;
	}
	return true;
}

//Function checkRequiredFields pour verifier les fields :
function checkRequiredFields(){
	//Supprimer les error chaque fois on click sur submit
	clearErrorMessages();

	//Validation les fields du formulaire :
	var fieldNom = validateInputField("nom", "error_nom") && validationNoCaracter("nom", "error_nom");
	var fieldType = validateInputField("type", "error_type");
	var fieldRace = validateInputField("race", "error_race");
	var fieldAge = validationAge("age", "error-age");
	var fieldDescription = validateInputField("desc", "error-desc");
	var fieldCourriel = validateInputField("courriel", "error-courriel") && validationCourriel("courriel", "error-courriel");
	var fieldAddCivique = validateInputField("adresse-civique", "error-adresse-civique");
	var fieldAddVille = validateInputField("ville", "error-ville");
	var fieldAddCodepostal = validateInputField("codepostal", "error-codepostal") && validationCodePostal("codepostal", "error-codepostal");

	return (fieldNom && fieldType && fieldRace && fieldAge && fieldDescription && fieldCourriel && fieldAddCivique && fieldAddVille && fieldAddCodepostal);
}