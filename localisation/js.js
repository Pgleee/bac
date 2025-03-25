function inscription() {
     var nom = document.getElementById('nom').value.trim();
     var email = document.getElementById('email').value.);
    var datenai = document.getElementById('dateNai').value;
    var genreMasculin = document.getElementById('masculin').checked;
    var genreFeminin = document.getElementById('feminin').checked;
    var mdp1 = document.getElementById('mdp1').value();
    var mdp2 = document.getElementById('mdp2').value.();


    
    if ( nom.length > 50) {
        alert('Le nom doit être une chaîne alphabétique de 50 caractères maximum, contenant au moins un espace, et commençant et se terminant par une lettre.');
        return false;
    }

    
   
    if (!emailRegex.test(email) || email.length > 50) {
        alert('L\'adresse email doit commencer par une lettre, se terminer par ".tn", et ne pas dépasser 50 caractères.');
        return false;
    }

   

    
    if (year < 1950 || year > 2006) {
        alert('La date de naissance doit être comprise entre 1950 et 2006.');
        return false;
    }

 
    if (!genreMasculin && !genreFeminin) {
        alert('Veuillez sélectionner un genre.');
        return false;
    }

 
    if (mdp1.length < 6 ) {
        alert('Le mot de passe doit contenir au moins 6 caractères sans espaces.');
        return false;
    }

    if (mdp1 !==mdp2) {
        alert('Les mots de passe ne correspondent pas.');
        return false;
    }

    
    
}

