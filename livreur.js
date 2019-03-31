document.getElementById("nom").addEventListener("input", function(e){
	var verifnom=document.getElementById("erreur");
	if(this.value.length < 4 ){
		verifdate.innerHTML= "Nom trop petit";
	}
	else{
		e.preventDefault();
		verifdate.innerHTML="";
	}	
})
/* Mdp simulatané
document.getElementById("confirm_mdp").addEventListener("input", function(e){
	var verifmdp= document.getElementById("erreur");
	if(this.value != document.getElementById("mdp").value){
		verifmdp.innerHTML= "Les motde passe ne sont pas similaires ";
	}
	else{
		e.preventDefault();
		verifmdp.innerHTML="";
	}
})
*/
document.getElementById("name_form").addEventListener("submit", function(e){
	var erreur="";
	var erreur_email="";
	var erreur_nom="";
	var erreur_mdp="";
	var inputs=this.getElementsByTagName("input");
	for(var i=0;i< inputs.length;i++){
		if(!inputs[i].value){
			erreur="Veillez verifier les données saisies ";
		}
	}
	/* Verif Email */ 
	var mail=inputs["email"].value;
	var part1=mail.substring(0,mail.indexOf("@"));
	var part2=mail.substring(mail.indexOf("@")+1,mail.indexOf("."));
	var part3=mail.substring(mail.indexOf(".")+1,mail.length);
	if((part2 !== "gmail" || part3!== "com") && (part2 !== "yahoo" || part3!== "fr") && (part2 !== "esprit" || part3!== "tn")){
		erreur_email= "Email Incorrect ";
	}
	else{
		erreur_email="";
	}
	/* Fin Email */
	/* Mot de passe */
	if(inputs["confirm_mdp"].value != inputs["mdp"].value){
		erreur_mdp= "Les motde passe ne sont pas similaires ";
	}
	else{
		erreur_mdp="";
	}
	/* Fin mot de passe */
	/* Longueur */
	if(inputs["nom"].value.length< 4){
		erreur_date = "Texte ";
	}
	else{
		erreur_date="";
	}
	/* Fin longueur */
	if(erreur || erreur_email || erreur_nom || erreur_mdp){
		e.preventDefault();
		document.getElementById("erreur").innerHTML="<u>NB:</u> <br>"+"- "+erreur+"<br>- "+erreur_email+"<br>- "+erreur_nom+"<br>- "+erreur_nom;
	}
	else{
		alert('Livreur ajouté !');
	}
	
})