function istitle() {

	var title = document.getElementById("titleA");
	//var titleErr = document.getElementById("titleErr");

	if((title.value.length >=150)||(!title.value.match(/^[A-Z]/))) {
		//titleErr.innerHTML ="Champ obligatoire,veuillez saisir au maximum 20 caractéres max";
		title.style.backgroundColor ="#ec7063";
		
		return false;
	}
	//titleErr.innerHTML="";
	title.style.backgroundColor ="#daf7a6";
	return true;
}



function isImage() {

	var image = document.getElementById("imageA");
	//var IMErr = document.getElementById("IMErr");
	var filePath = image.value; 
	var allowedExtensions = /(\.png)$/i; 
	if (!allowedExtensions.exec(filePath)) { 
		//IMErr.innerHTML="veillez inserer une image";
		image.style.backgroundColor ="#ec7063";
		console.log("false");
  		return false;
  	}
	//IMErr.innerHTML="";
	image.style.backgroundColor ="#daf7a6";
	console.log("true");
	return true;
}



/*function isEmail () {

	var email = document.getElementById("email");
	var mailErr = document.getElementById("mailErr");
	var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;

	if(!email.value.match(regex)) {
    	mailErr.innerHTML="Champ obligatoire,veuillez saisir un email correct!";
    	email.style.backgroundColor ="#ec7063";
    	return false;
  	}
  	mailErr.innerHTML="";
  	email.style.backgroundColor ="#daf7a6";
  	return true;
}

function isConfirmedEmail() {

	var email = document.getElementById("email").value;
	var confirmEmail = document.getElementById("cemail");
	var cmailErr = document.getElementById("cmailErr");

	if(confirmEmail.value!=email){
		cmailErr.innerHTML="Champ obligatoire,veuillez saisir un email correct!";
    	confirmEmail.style.backgroundColor ="#ec7063";
    	return false;
	}
	cmailErr.innerHTML="";
	confirmEmail.style.color="#daf7a6";
	return false;
}




function isTel() {

	var tel = document.getElementById("tel");
	var TErr = document.getElementById("TErr");


	if (tel.value.length <>8) {
		PNErr.innerHTML="Champ obligatoire,veuillez saisir un numero de 8 chiffres !";
		tel.style.backgroundColor ="#ec7063";
  		return false;
  	}
	TErr.innerHTML="";
	tel.style.backgroundColor ="#daf7a6";
	return true;
}




function isAdresse() {

	var adresse = document.getElementById("adresse");
	var adErr = document.getElementById("aderr");
	var minChar = 20;

	if (message.value.length <= minChar) {
		msgErr.innerHTML="Champ obligatoire,veuillez saisir au minimum 20 char!";
		message.style.backgroundColor ="#ec7063";
  		return false;
  	}
	adErr.innerHTML="";
	message.style.backgroundColor ="#daf7a6";
	return true;
}


function isDateNais() {

	var DateNais = document.getElementById("DateNais");
	var DNErr = document.getElementById("DNErr");
	

	if (DateNais.value < 2003-01-01) {
		DNErr.innerHTML="vous devriez etre +18 ans";
		DateNais.style.backgroundColor ="#ec7063";
  		return false;
  	}
	DNErr.innerHTML="";
	DateNais.style.backgroundColor ="#daf7a6";
	return true;
}*/

function isValid() {

	if(!istitle()|| !isImage()){
		alert("un champ invalide");
    }
    else alert("success");
   
}