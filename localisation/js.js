function Verif() {
    var nom=document.getElementById(nom).value;
    var email=document.getElementById(email).value;
    var dateNai=document.getElementById(dateNai).value;
    var masculin=document.getElementById(masculin).checked // to see later;
    var feminin=document.getElementById(feminin).checked // to see later;
    var mdp1=document.getElementById(mdp1).value;
    var mdp1=document.getElementById(mdp1).value;
    
    if(nom.length>50 || alphabetic(nom.charAt(0)) == false || alphabetic(nom.charAt(nom.length) || nom.indexof(" ") == -1 ) ){
        alert("nom invalid");
        return false;
    }
    if(email.length>50 || email.indexof(".tn")==-1 || alphabetic(email.charAt(0)) == false ){
        alert("email invalid");
        return false;
    }
    if((dateNai<1950) || (dateNai>2006)){
        alert("date invalid");
        return false;
    }
    if(feminin==false && masculin==false){
        alert("genre invalid");
        return false;
    }
    if(mdp1.length!=6 || mdp1.indexof(" ") != -1){
        alert("mot de passe invalid");
        return false;

    }
    if(mdp2!=mdp1){
        alert(" les mots de passe ne sont pas identiques");
        return false;
    }
}

function alphabetic(){
    ch=ch.toUpperCase();
    for(i=0;i<ch.length;i++)
     {
        if ((ch[i]>"Z")||(ch[i]<"A")){
            return false;
        }
     }
}


function choixParcelle(x){
    document.getElementById("numPar").value = x.toString();

    // ou 

    /*
    if(x==1){
        document.getElementById("numPar").value="1";
    }
    if(x==2){
        document.getElementById("numPar").value="2";
    }
    if(x==3){
        document.getElementById("numPar").value="3";
    }
    if(x==4){
        document.getElementById("numPar").value="4";
    }*/
    
}



