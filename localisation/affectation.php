<?php 
mysqli_connect('localhost','root','','bdbac2')or die('erreur connection');
$idMem = $_POST['idMem'];
$mdp1 = $_POST['mdp1'];
$numParcelle = $_POST['numParcelle'];
$jardinId = $_POST['jardinId'];

$req =" SELECT * FROM membre WHERE `$mdp1` = 'mdp1' '$idMem'= 'idMem' "; 
$res = mysqli_query($conn, $req);
if(mysqli_num_rows($res)==0){
    echo('Membre inexistant');
}
else
{
    $req2 = "INSERT INTO affectations (numParcelle, jardinId, idMem, dateDeb) VALUES ($numParcelle, $jardinId, $idMem, '$dateDeb')";
    $res2= mysqli_query($conn, $req);
    echo('Affectation réussie');

}
?>