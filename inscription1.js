document.getElementById("inscription").addEventListener("submit",function(validation){

	validation.preventDefault();

	var erreur;

	var lesinputs = this.getElementsByTagName("input");

	for (var i = 0; i <lesinputs.length();i++){

		console.log(lesinputs[i]);

		if(!lesinputs[i].value){

			erreur = " VEUILLEZ RENSEIGNER TOUS LES CHAMPS D'INFORMATION ";
		}
	}

	
	

	if(erreur){

		validation.preventDefault();

		document.getElementById("erreur").innerHTML = erreur;

		return false;

	}

	else{

		alert("Inscription Validée")
	}

var nom = document.getElementById("nom");
	var email = document.getElementById("email");
	var email2 = document.getElementById("email2");
	var password = document.getElementById("password");
	var password2 = document.getElementById("password2");

if(!nom.value){

		erreur = "VEUILLEZ RENSEIGNER UN NOM S'IL-VOUS-PLAÎT"
	}


	if(!email.value){

		erreur = "VEUILLEZ RENSEIGNER UN EMAIL VALIDE S'IL-VOUS-PLAÎT"
	}


	if(!email2.value){

		erreur = "VEUILLEZ RENSEIGNER LE MÊME EMAIL PRÉCÉDENT S'IL-VOUS-PLAÎT"
	}


	if(!password.value){

		erreur = "VEUILLEZ RENSEIGNER UN MOT DE PASSE S'IL-VOUS-PLAÎT"
	}


	if(!password2.value){

		erreur = "VEUILLEZ RENSEIGNER LE MÊME MOT DE PASSE PRÉCÉDENT S'IL-VOUS-PLAÎT"
	}


});