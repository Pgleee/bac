<?php 
mysqli_connect('localhost','root','','bdbac2')or die('erreur connection');
$nom = $_POST['nom'];
$email = $_POST['email'];
$dateNais = $_POST['dateNai'];
$genre = $_POST['genre'];
$req =" SELECT * FROM membre WHERE `$email` = 'email' "; 
$res = mysqli_query($conn, $req);
if(mysqli_num_rows($res)==0){
    echo('em deja ututliser');
}
else{
 
      $req4 = "INSERT INTO membre VALUES ($nom  ,$email ,$dateNais,$genre,$motDePasse )";
      $res4 = mysqli_query($conn, $req4);
      echo("");
}


?>