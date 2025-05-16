<?
$con=mysqli_connect('localhost','root','','____evaluation.sql')or die('erreur connection');
$cin2= $_POST['cin2'];
$cours = $_POST['cours'];
$notes = $_POST['notes'];

$req1="SELECT*FROM apprenant WHERE $cin2=cin2"
$res1=mysqli_query($con,$req1)
if(mysqli_num_rows($res1==0)){
    echo("Apprenant innexistant ")
}
$req2="SELECT*FROM evaluation WHERE $cin=cin and $cours=cours"
$res2=mysqli_query($con,$req2)
if(mysqli_num_rows($res1==1)){
    echo("Vous avez déjà évalué ce cours ")
}
$req3 = "INSERT INTO evaluation ($cin2,$cours,$notes) VALUES  (cin2,cours,notes) ";
$res3 = mysqli_query($conn, $req3);
echo('Evaluation enregistrée avec succès');


?>