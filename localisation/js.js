function Verif() {
    var nom=document.getElementById(nom).value;
    var email=document.getElementById(email).value;
    var dateNai=document.getElementById(dateNai).value;
    var genre=document.getElementById(genre).select;
    var mdp1=document.getElementById(mdp1).value.trim;
    var mdp1=document.getElementById(mdp1).value;
    if(nom.lenght!=50 ||nom.charAt[0]==email.substr||nom.charAt[-1]==substr  ){
        alert("")
        return false;
    }
    if(email.lenght!=50 || email.indexof("tn")==-1 || email.charAt[0]==substr  ){
        alert("")
        return false;
    }
    if((dateNais>1950) || (dateNais<2006)){
        alert("")
        return false;
    }
    if(genre.select)
        {
            alert("")
            return false;
        }
    if(mdp1.lenght!=6){
        alert("")
            return false;

    }
    if(mdp2!=mdp1){
        alert("")
            return false;
    }
}

