<?
$con=mysqli_connect('localhost','root','','')or die('erreur connection');
$cin= $_POST['cin'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail= $_POST['mail']; 

$req1="SELECT*FROM apprenant WHERE $cin=cin"
$res1=mysqli_query($con,$req1)
if(mysqli_num_rows($res1==1)){
    echo("Apprenant existant ")
}
$req2 = "INSERT INTO apprenant ($cin,$nom,$prenom,$mail) VALUES  (cin,nom,prenom,mail) ";
$res2 = mysqli_query($conn, $req2);
echo('Apprenant enregistré avec succès');



?>