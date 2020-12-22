var form = document.querySelector("#formulaire");

form.addEventListener('submit', function(event){
	if(!checkRequiredFields()){
		event.preventDefault();
		console.log("Mehran");
	}
})


// paak kardane span haaye error
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

//TextBox validation pour vide et virgule :
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

//Validation pour caracter entre 3 et 20 :
function validationNoCaracter(inputId, spanId){
	var value = document.getElementById(inputId).value;
	if (value.length < 3 && value.length > 20){
		document.getElementById(spanId).innerHTML = "Ce champ doit avoir entre 3 et 20 caractères !";
		return false;
	}
	return true;
}

//Number validation :
function validationAge(inputId, spanId){
	var value = document.getElementById(inputId).value;
	if(value === "" || value < 0 || value > 30){
		document.getElementById(spanId).innerHTML = "Age doit avoir un nombre entre 0 et 30 !";
		return false;
	}
	return true;
}

function validationDesc(inputId, spanId){
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

function validationCourriel(inputId, spanId){
	var value = document.getElementById(inputId).value;
	var regex = /\w+@\w+\.\w+/i;
	if (!regex.test(value)) {
		document.getElementById(spanId).innerHTML = "Votre courriel n'est pas valide !";
		return false;
	}
	return true;
}

function validationCodePostal(inputId, spanId){
	var value = document.getElementById(inputId).value;
	var regex = /[A-Za-z]\d[A-Za-z]\s?\d[A-Za-z]\d/i;
	if (!regex.test(value)) {
		document.getElementById(spanId).innerHTML = "Votre code postal n'est pas valide !";
		return false;
	}
	return true;
}

// vaghty submit misheh :
function checkRequiredFields(){
	
	clearErrorMessages();

	var fieldNom = validateInputField("nom", "error_nom") && validationNoCaracter("nom", "error_nom");
	var fieldType = validateInputField("type", "error_type");
	var fieldRace = validateInputField("race", "error_race");
	var fieldAge = validationAge("age", "error-age");
	var fieldDescription = validationDesc("desc", "error-desc");
	var fieldCourriel = validateInputField("courriel", "error-courriel") && validationCourriel("courriel", "error-courriel");
	var fieldAddCivique = validateInputField("adresse-civique", "error-adresse-civique");
	var fieldAddVille = validateInputField("ville", "error-ville");
	var fieldAddCodepostal = validateInputField("codepostal", "error-codepostal") && validationCodePostal("codepostal", "error-codepostal");

	return (fieldNom && fieldType && fieldRace && fieldAge && fieldDescription && fieldCourriel && fieldAddCivique && fieldAddVille && fieldAddCodepostal);
}