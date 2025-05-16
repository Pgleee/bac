function verif(){
    var cin = document.getElementById('cin').value;
     var nom = document.getElementById('nom').value;
    var prenom = document.getElementById('prenom').value;
    var mail = document.getElementById('mail').value;
    
    
    if(cin.length != 8 || cin.chart[0]!=1 ||  cin.chart[0]!=0  ){
        alert("il faut entrez votre nombre cin ");
        return false;}
    if (nom.length!=5 ||prenom.length!=5 ||nom.alptha || prenom.alptha){
        alert('entrer votre nom et prenom')
        return false;
    }
    if(mail.length>40 || mail.charAt(0))

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
function verif(){
    var cin2 = document.getElementById('cin2').value;
    var cours = document.getElementById('cours').selectedIndex;
    var notes = document.getElementById('notes').selectedIndex;
     if(cin2.length != 8 || cin2.chart[0]!=1 ||  cin2.chart[0]!=0  ){
        alert("il faut entrez votre nombre cin ");
        return false;}
   

}

