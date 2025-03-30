<?php 
$con=mysqli_connect('localhost','root','','restaurant')or die('erreur connection');

$nom = $_POST['nom'];
$pre = $_POST['pre'];
$tel = $_POST['tel'];
$adr= $_POST['adr'];  
$psd= $_POST['psd'];  


$req1 = "SELECT * from client where $tel='tel'";
$res1 = mysqli_query($con,$req1) ;
if(mysqli_num_rows($res1) == 0 )
{
	$req2="INSERT into client values('$tel','$nom','$pre','$adr','$psd')";
    $res2=mysqli_query($con,$req2) ;
    if($res2){
		echo("inscription realise avec succs");
	}

}
else 
{
	$req3="SELECT * from client where $tel='tel' and $nom='nom' and $pre='prenom'";
	$res3=mysqli_query($con,$req3);
	if(mysqli_num_rows($res3)!=0)
	{
		echo("client deja inscrit");
	}
	else{
		$req4="SELECT * from client where $tel='tel' and $nom!='nom' or $pre!='prenom'";
		$res4=mysqli_query($con,$req4);

		if(mysqli_num_rows($res4)!=0)
		{
			echo("Erreur : Tél, Nom ou Prénom erroné !");
		}
	}
}











?>
