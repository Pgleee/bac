function validerForm() {
    var titre = document.getElementById("titre").value;
    var description= document.getElementById("description").value;
    var prix= document.getElementById("prix").value;
    var datedebut = document.getElementById("date_debut").value;
   
    if (titre === "" || description === "" || prix === "" || datedebut === "") {
      alert("Veuillez remplir tous les champs.");
      return false;
    }
  
   
    if (isNaN(prix)) {
      alert("Le prix doit être un nombre valide.");
      return false;
    }
    return true;
  }
  function Verif() {
     var cin  = document.getElementById("cin").value();
    var nom = document.getElementById("nom").value();
    var prenom= document.getElementById("prenom").value();
    var tel= document.getElementById("tel").value();
    var article= document.getElementById("article").value;
    var prixPropose= document.getElementById("prixPropose").value();
    if (cin.length !== 8) {
      alert("Le CIN doit contenir exactement 8 caractères.");
      return false;
    }
  
    if (nom === "" || prenom === "") {
      alert("Veuillez saisir le nom et le prénom.");
      return false;
    }
    if (tel.length !== 8) {
      alert("Le numéro de téléphone doit contenir 8 chiffres.");
      return false;
    }
    if (article === "") {
      alert("Veuillez sélectionner un article.");
      return false;
    }
   if (prixPropose === "") {
      alert("Veuillez saisir un prix proposé.");
      return false;
    }
    
    return true;
  }
 
