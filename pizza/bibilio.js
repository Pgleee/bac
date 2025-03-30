function verif(){
    var nom = document.getElementById('nom').value;
    var prenom = document.getElementById('prenom').value;
    var tel = document.getElementById('tel').value;
    var adr = document.getElementById('adr').value;
    var psd = document.getElementById('psd').value;
    var cpsd = document.getElementById('cpsd').value;

   if(nom.length < 3 || alpha(nom) ){
        alert("nom talle minimale 3 ");
        return false;
   }
   if(prenom.length < 3 || alpha(prenom) ){
    alert("prenom talle minimale 3 ");
        return false;
    }
   
   if(tel.length!=8 || (tel.charAt(0)<'2') || isNaN(tel)){
    alert("tel non valide ");
    return false;
   }
   
   
    if (adr.length < 10 ) {
        alert("L'adresse doit contenir au moins 10 caractères");
        return  false;
    }
    
  
    if (psd.length != 6 || psd.indexof(" ") != -1) {
        alert("Le mot de passe doit contenir au moins 6 caractères sans espaces");
        return  false;
    }

    if (psd != cpsd) {
        alert("Les mots de passe ne correspondent pas");
        return  false;
    }
}
function alpha(ch){
    ch=ch.toUpperCase();
    for(i=0;i<ch.length;i++)
     {
        if ((ch.charAt(i)>"Z")||(ch.charAt(i)<"A")){
            return false;
        }
     }
}
function verif2()
{
    //checked nesta3emlouha f el button radio

    var p = document.getElementById('p').SelectedIndex;
    var q = document.getElementById('q').value;
    var tel = document.getElementById('tel').value;
    var pas = document.getElementById('pas').value;

if(p<1){
    alert("il faut choisir un type de pizza");
    return false;
}


if((q<1)||(q>5)|| isNaN(q))
{
    alert(" doit etre entre 1 et 5");
    return false;
}



if(tel.length != 8 || (tel.charAt(0)<"2"))
{
    alert("Le champ telephone doit etre de 8 chiffres dont le premier est superieur a 1");
    return false;
}


if((pas.length!=6)||(pas.indexOf(' ')!=-1))
{
    alert("Mot de passe sans espace de taille 6");
    return false;
}

}
