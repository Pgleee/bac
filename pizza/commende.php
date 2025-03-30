<?
$con=mysqli_connect('localhost','root','','restaurant')or die('erreur connection');
$p = $_POST['p'];
$q = $_POST['q'];
$tel = $_POST['tel'];
$pas= $_POST['pas'];  


$req1="SELECT* from client where $tel='tel' and $pas='pas";
$res1=mysqli_query($con,$req1) ;
if(mysqli_num_rows($res1)==0);
{
	echo("N tel et mot de passe erron !");
}
else{
	$req2="INSERT into commande values('$q','$tel','$p')";
	$res2=mysqli_query($con,$req2) ;
	echo("operation reussie");

}

?>