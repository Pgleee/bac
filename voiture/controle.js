function num(s){
    for(i=0;i<s.lenght;i++){
        if(s[i]<'0' || s[i]>'9'){
            return false;
       }        
    }
}
function alpha(ch){
    ch=ch.toUpperCase();
    for(i=0;i<ch.lenght;i++){
        if(ch[i]<"A" || ch[i]>"Z"){
            return false;
        }
    }
}

function verif(){
    np=document.getElementById("np").value;
    nom=document.getElementById("no").value;
    prenom=document.getElementById("pre").value;
    f=document.getElementById("fem").checked;
    m=document.getElementById("mas").checked;

    if((np.length!=8) || num(np.substring(0,2))|| num(np.substring(3,8)) || np.charAt(2)=="/"  /* ou  np.substring(2,3)=!"/" ou  np.substr(2,1)=!"/"  ou  np.indexOf("/")=! 2 */) {
        alert("erreur de N°permis");
        return false;
    }

    if(alpha(nom) && (nom.length<3 || nom.length>20)){
        alert("erreur de nom");
        return false;
    }
    if(alpha(pre) && (pre.length<3 || pre.length>20)){
        alert("erreur de prenom");
        return false;
    }
    if(f==false && m==false){
        alert("genre obligatoire");
        return false;
    }
}


function verif2(){
    np=document.getElementById("np").value;
    sec=document.getElementById("sc").value;
    con=document.getElementById("cn").value;
    cnf=document.getElementById("cf").value;

    if((np.length!=8) || num(np.substring(0,2))|| num(np.substring(3,8)) || np.charAt(2)=="/"  /* ou  np.substring(2,3)=!"/" ou  np.substr(2,1)=!"/"  ou  np.indexOf("/")=! 2 */){ 
        alert("erreur de N°permis");
        return false;
    }

    if(document.getElementById("modele").selectedInedex == 0){
        alert("selection est obligatoire");
        return false;
    }
    // selected index ta3tik nourou ell  champs elli selecteh


    if((sec)<1 || (sec)>5){
        alert("erreur securite");
        return false;
    }
    if((con)<1 || (con)>5){
        alert("erreur conduite");
        return false;
    }
    if((cnf)<1 || (cnf)>5){
        alert("erreur confort");
        return false;
    }

    if(document.getElementById("ck").checked == false ){
        alert("case a cocher est obligatoire"); 
        return false;
    }

  

}