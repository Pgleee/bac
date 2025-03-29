function verif(){
    var nom = document.getElementById('nom').value;
    var prenom = document.getElementById('prenom').value;
    var tel = document.getElementById('tel').value;
    var adr = document.getElementById('adr').value;
    var psd = document.getElementById('psd').value;
    var cpsd = document.getElementById('cpsd').value;
   if(nom.length < 3 || nom.alpha){
        alert("nom talle minimale 3 ")
        return false;
   }
   if(prenom.length < 3 || prenom.alpha ){
    alert("nom talle minimale 3 ")
        return false;
    }
   
   if(tel.length!=8 || (tel.charAt(0)>1)){
    alert("tel non valide ")
        return false;
   }
   
   
    if (adr.length < 10 ) {
        alert("L'adresse doit contenir au moins 10 caractères");
        return  false;
    }
    
  
    if (psd.length < 6 || psd.indexof(" ") != -1) {
        alert("Le mot de passe doit contenir au moins 6 caractères sans espaces");
        return  false;
    }
    
   
    if (psd !== cpsd) {
        alert()
        return  false;
}
}
function alpha(){
    ch=ch.toUpperCase();
    for(i=0;i<ch.length;i++)
     {
        if ((ch[i]>"Z")||(ch[i]<"A")){
            return false;
        }
     }
}
function verif2()
{
    var p = document.getElementById('p').Checked;
    var q = document.getElementById('q').value;
    var tel = document.getElementById('tel').value;
    var pas = document.getElementById('pas').value;
            
 

if(p==''){
    alert("il faut choisir un type de pizza");
    return false;
}


if((q<1)||(q>5)|| isNaN(q) )
    {alert(" doit etre entre 1 et 5");
    return false;}



if(tel.length !== 6 || (tel<1))
    {
    alert("Le champ telephone doit etre de 8 chiffres dont le premier est superieur a 1");
    
    return false;
}


if((pas.length!=6)||(pas.indexOf(' ')!=-1))
{alert("Mot de passe sans espace de taille 6");
    return false;}

}
