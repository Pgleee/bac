<?
$con=mysqli_connect('localhost','root','','manuoulation')or die('erreur connection');
$cin= $_POST['cin'];
$np= $_POST['np'];
$adr = $_POST['adr'];
$cp= $_POST['cp'];  
$fra= $_POST['fra']; 
$op= $_POST['op']; 

$req1 = "SELECT * from expediteur where $cin='cinexp' ;
$res1 = mysqli_query($con,$req1) ;
if(mysqli_num_rows($res1)==0)
{
	echo("Nerreur: Expeditaur !");
}
else{
	$req2=" INSERT into colis values('$cin','$np','$adr','$cp','$fra','$op')";
	$res2=mysqli_query($con,$req2) ;
	echo("enregistrement realise avec succe");
}
?>