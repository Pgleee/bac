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

    if((np.lenght!=8) || (np.substring(0,2) )|| (np.substring(3,8))) {
        alert("erreur de N°permis");
        return false;
    }

    if(alpha(nom) && nom.lenght<3 || nom.lenght>20){
        alert("erreur de nom");
        return false;
    }
    if(alpha(pre) && pre.lenght<3 || pre.lenght>20){
        alert("erreur de prenom");
        return false;
    }


    if(document.getElementById("fem").checked==false && document.getElementById(mas).checked==false){
        alert("genre obligatoire");
        return false;
    }
}

function verif2(){
    np=document.getElementById("np").value;
    sec=document.getElementById("sc").value;
    con=document.getElementById("cn").value;
    cnf=document.getElementById("cf").value;

    if((np.lenght!=8) || (num(np.substring(0,2)) )|| (num(np.substring(3,8)))|| (np[2]="/") ){
        alert("erreur de N°permis");
        return false;
    }

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

    if(document.getElementById("ck").checked==false){
        alert("case a cocher est obligatoire"); 
        return false;
    }
    if(document.getElementById("wi").selectedInedex==false &&
       document.getElementById("ws").selectedInedex==false &&
       document.getElementById("wt").selectedInedex==false){
        alert("selection est obligatoire");
        return false;
    }

}