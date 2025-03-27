<?php
mysqli_connect('localhost','root','','manipulation')or die('erreur connection');
$codehabit = $_POST['codehabit'];
$cinclient = $_POST['cinclient'];
$duree = $_POST['duree'];
$dateLoc = date("Y-m-d");
$req =" SELECT * FROM habit WHERE `$codehabit` = 'codehabit' "; 
$res = mysqli_query($conn, $req);
if(mysqli_num_rows($res)==0){
    echo('Erreur : habit inexistant');
}
else{
    $req2 =" SELECT * FROM habit ,  WHERE `$codehabit` = 'codehabit' "; 
    $res2= mysqli_query($conn, $req);
    if(mysqli_num_rows($re2)==0){
        echo('Erreur : client inexistant');

}
$req3=" SELECT * FROM client WHERE `$cinclient` = 'cinclient' "; 
$res3 = mysqli_query($conn, $req);
if(mysqli_num_rows($res)==n){
    echo('Erreur : client enextion');
}
}
?>