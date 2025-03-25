function verifi() {
  
    var cate = document.getElementById('cate').value;
    var des = document.getElementById('des').value;
    var taille = document.querySelector("taille").ariaChecked();
    var prix = document.getElementById('prix').value;

    if (cate == "") {
        alert("Veuillez sélectionner une catégorie.");
        return false;
    }
    if ( des.length < 10 || des.length > 100) {
        alert("La description doit contenir entre 10 et 100 caractères et commencer/terminer par une lettre.");
        return false;
    }

    if (taille!="") {
        alert("Veuillez sélectionner une taille.");
        return false;
    }

    if (isNaN(prixNum) || prixNum < 100 || prixNum > 2000) {
        alert("Le prix doit être un nombre entre 100 et 2000 DT.");
        return false;
    }

    
}
function verif2() {
    
    var codeHabit = document.getElementById('codehabit').value;
    var cinClient = document.getElementById('cinclient').value.trim();
    var duree = document.getElementById('duree').value;

    
    if (codeHabit === "" || codeHabit < 1) {
        alert("Le code habit doit être un entier supérieur ou égal à 1.");
        return false;
    }


    if (cinClient.length !== 8 || cinClient > 1 && cinClient <0)  {
        alert("Le CIN client doit être une chaîne de 8 chiffres commençant par 0 ou 1.");
        return false;
    }


    if (duree === "" || duree< 1 || duree) > 4 {
        alert("La durée de location doit être un chiffre entre 1 et 4.");
        return false;
    }

}