<?php
mysqli_connect('localhost','root','','bdbac2')or die('erreur connection');
$codehabit = $_POST['codehabit'];
$cinclient = $_POST['cinclient'];
$duree = $_POST['duree'];
$dateLoc = date("Y-m-d");
$req =" SELECT * FROM habit WHERE `$codehabit` = 'codehabit' "; 
$res = mysqli_query($conn, $req);
if(mysqli_num_rows($res)==0){
    echo('Erreur : habit inexistant')
}
else{
    $req2 =" SELECT * FROM habit ,  WHERE `$codehabit` = 'codehabit' "; 
    $res2= mysqli_query($conn, $req);
}
$req =" SELECT * FROM client WHERE `$cinclient` = 'cinclient' "; 
$res = mysqli_query($conn, $req);
if(mysqli_num_rows($res)==0){
    echo('Erreur : client enextion')

?>