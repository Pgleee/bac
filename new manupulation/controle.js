function verif(){
    var cin = document.getElementById('cin').value;
    var np = document.getElementById('np').value;
    var adr = document.getElementById('adr').value;
    var cp = document.getElementById('cp').value;
    var fra = document.getElementById('fra').selectedindex;
    var op = document.getElementById('op').selectedindex;
    
    
    if(cin.length != 3 || cin.chart[0]!=1 ||  cin.chart[0]!=0  ){
        alert("il faut entrez votre nombre cin ");
        return false;
   }
    if(np.length !=10 || np.length !=100 ||np.indexof== ""|| np.alptha() ){
    alert("")
    return false
   }}
    if (cp.length!=4){
        alert("")
    return false

    }
    if(fra=="" || op==""){
        alert("")
    return false


    }

}