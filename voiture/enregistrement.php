<?
$con=mysqli_connect('localhost','root','','cliant')or die('erreur connection');
$np = $_POST['np'];
$nom = $_POST['nom'];
$pre = $_POST['pre'];
$genre= $_POST['genre'];
$req1 =' SELECT * FROM testeur WHERE $np = numpermis ' ;
$res1=mysqli_query($con,$req1);
if(mysqli_num_rows($req)>0){
    echo("Numéro de permis déjà existant");
}
else {
    $req2="INSERT INTO testeur values ('$np','$nom','$pre','$genre')";
    $res2=mysqli_query($con,$req2);
    echo("Enregistrement fait avec succès") ;

}
?>