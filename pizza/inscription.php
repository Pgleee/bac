<?php 
$con=mysqli_connect('localhost','root','','restaurant')or die('erreur connection');

$nom = $_POST['nom'];
$pre = $_POST['pre'];
$tel = $_POST['tel'];
$adr= $_POST['adr'];  
$psd= $_POST['psd'];  
$cpsd= $_POST['cpsd'];  
$req1="select* from client where $tel='tel'";
$ret1=mysql_query($rq1) 
if(mysql_num_rows($rt1)==0)
{
	$rq2="insert into client values('$nom','$pre','$tel','$adr','$psd')";
    $res2=mysql_query($con,$req2) 
    	if($rt2){echo("inscription realise avec succs");}

}
else 
{
	$req3="select* from client where $tel='tel' ,$pre='pre',$nom='nom ";
	$res3=mysql_query($con,$rq3) 
	if(mysql_num_rows($res3)!=0)
	{echo("client deja inscrit");}
}











?>
