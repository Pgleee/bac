<?php 
mysqli_connect('localhost','root','','bdbac')or die('erreur connection');
$cin = $_POST['cin'];
$nom= $_POST['nom'];
$prenom = $_POST['prenom'];
$tel= $_POST['tel'];
$codeArticle =$_POST['article'];   
$prixPropose =$_POST['prixPropose'];

$req =" SELECT * FROM article WHERE `$codeArticle` = 'code' ";  // hedi jebet el ligne elli feha el article ellli nlawjou 3lih
$res = mysqli_query($conn, $req); // execute la requete
$r = mysqli_fetch_row($res); // recuperer les donnees de la ligne ( el res bech t7otha fi tableau)
if ($r[2] >  $prixPropose ) {
  echo("offre rejeter");
}
else{
  $req2 = "SELECT * FROM CLIENT WHERE cin = '$cin'"; // hedi jebet el ligne elli feha el client
  $res2 = mysqli_query($conn, $req2); // execute la requete
  if(mysqli_num_rows($res2)==0){
    $req3 = "INSERT INTO CLIENT VALUES ( $cin ,  $nom , $prenom , $tel)";
    $res3 = mysqli_query($conn, $req3) or die("error");

    $req4 = "INSERT INTO OFFRE VALUES ($cin ,$codeArticle,$prixPropose)";
    $res4 = mysqli_query($conn, $req4)or die("error");

    if(mysqli_affected_rows($mysql)){
      echo("Offre enregistrée pour ce nouveau client");
    }
  
  else {
    $req5 = "SELCECT * FROM OFFRE WHERE cin = '$cin' AND codeArticle = '$codeArticle'";
    $res5 = mysqli_query($conn, $req5);
    if(mysqli_num_rows($res5)==0){
      $req4 = "INSERT INTO OFFRE VALUES ($cin ,$codeArticle,$prixPropose)";
      $res4 = mysqli_query($conn, $req4)or die("error");
      echo("Nouvelle Offre enregistrée");
    }
      else{
        $req6 = "UPDATE OFFRE SET prixPropose = $prixPropose ";
        $res6 = mysqli_query($conn, $req6)or die("error");
        echo("Mise å jour faite avec succés");
      }
   

    

  }
  }
}




?>