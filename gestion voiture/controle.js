function Verif() {
    var cin  = document.getElementById("cin").value();
    var nom = document.getElementById("nom").value();
    var prenom= document.getElementById("prenom").value();
    var tel= document.getElementById("tel").value();
    var article= document.getElementById("article").selectedIndex;
    var prixPropose= document.getElementById("prixPropose").value();
    if (cin.length !== 8 || cin.charAt(0)!= 1 && cin.charAt(0)!= 0 ) {
      alert("Le CIN doit contenir exactement 8 caractères et comencer par 0 ou 1.");
      return false;
    }
  
    if (nom == "" ) {
      alert("Veuillez saisir le nom");
      return false;
    }
    if (prenom == "") {
      alert("Veuillez saisir le prénom.");
      return false;
    }
    if (tel.length !== 8 || tel.charAt(0)=="0") {
      alert("Le numéro de téléphone doit contenir 8 chiffres.");
      return false;
    }
    if (article == 0) {
      alert("Veuillez sélectionner un article.");
      return false;
    }
   if (prixPropose == "") {
      alert("Veuillez saisir un prix proposé.");
      return false;
    }
    
    return true;
  }


  function espace(ch) {
    if(ch.charAt(0)==" "){
      ch = ch.substring(1,ch.length);
    }
    if(ch.charAt(ch.length - 1)==" "){
      ch = ch.substring(0,ch.length - 2);
    }
    if(ch.indexOf("  ") != -1){
      ch = ch.replace("  "," ");
    }
    if(ch.charAt(0)!=ch.charAt(0).toUpperCase()){
      ch.charAt(0) = ch.charAt(0).toUpperCase();
    }



  }
 
