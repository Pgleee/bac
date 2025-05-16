<?
$con=mysqli_connect('localhost','root','','manuoulation')or die('erreur connection');
$date1 = date("ymd : H:i:s");
$date2 = date("ymd : H:i:s");
$req="SELECT * FROM "colis"
$res=mysqli_query($con,$req)
if (mysqli_fetchrow)


?>