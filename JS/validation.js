var form = document.querySelector("form");
form.addEventListener('submit', function(event){
	if(!checkRequiredFields()){
		event.preventDefault();
	}
})


// paak kardane span haaye error
function clearErrorMessages(){
	document.getElementById("error_lname").innerHTML = "";
	document.getElementById("error_fname").innerHTML = "";
	document.getElementById("error-radio").innerHTML = "";
	document.getElementById("error-checkBox").innerHTML = "";
	document.getElementById("error-nombre").innerHTML = "";
	document.getElementById("error-select").innerHTML = "";
}

//TextBox validation :
function validateInputField(inputId, spanId){
	var value = document.getElementById(inputId).value;
	if(value == null || value === ""){
		document.getElementById(spanId).innerHTML = "Ce champ doit contenir une valeur!";
		return false;
	}
	return true;
}

//RadioButton validation
function validationRadio(){
	/*var red = document.getElementById("red");
	var blue = document.getElementById("blue");
	if (!red.checked && !blue.checked) {
	  document.getElementById("error-radio").innerHTML = "il faut check radio button !";
	  return false;
	}
	return true;*/
	var radioButtonsAcces = document.querySelectorAll("input[name='colors']");
	var counter = 0;
	radioButtonsAcces.forEach(function(item){
		if(item.checked){
			counter++;
		}
	});
	if(counter === 0){
		document.getElementById("error-radio").innerHTML = "il faut check radio button !";
		return false;
	}
	return true;
}

//CheckBox validation :
function validationCheckBox(){
	var checkBoxAcces = document.querySelectorAll("input[type=checkbox]");
	var counter = 0;
	checkBoxAcces.forEach(function(item){
		if(item.checked){
			counter++;
		}
	})
	if(counter === 0){
		document.getElementById("error-checkBox").innerHTML = "il faut check checkbox !";
		return false;
	}
	return true;
}

//Number validation :
function validationNombre(nombreId, spanId){
	var value = document.getElementById(nombreId).value;
	if(value === "" || value < 0 || value > 5){
		document.getElementById(spanId).innerHTML = "Ce champ doit doit avoir un nombre entre 0 et 5!";
		return false;
	}
	return true;
}

//SelectBox validation :
function validationSelects(selectId, spanId){
	var value = document.getElementById(selectId).value;
	if(value === null || value === ""){
		document.getElementById(spanId).innerHTML = "Vous devez choisir une auto !";
		return false;
	}
	return true;
}

// vaghty submit misheh :
function checkRequiredFields(){
	clearErrorMessages();
	//validations :
	var fieldNom = validateInputField("nom", "error_lname");
	var fieldPrenom = validateInputField("prenom", "error_fname");
	var radios = validationRadio();
	var checkBox = validationCheckBox();
	var nombre = validationNombre("quantity", "error-nombre");
	var selects = validationSelects("cars", "error-select");

	// agar true return beshe form submit misheh
	return fieldNom && fieldPrenom && radios && checkBox && nombre;
}