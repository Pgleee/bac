<?php
mysqli_connect('localhost','root','','manupulation')or die('erreur connection');
$Cate = $_POST['cate'];
$taille = $_POST['taille'];
$prix = $_POST['prix'];
$des= $_POST['desc'];  
$req1 = "INSERT INTO habit ($Cate,$taille,$prix,$des) VALUES  (Cate,taille,prix,des) ";
$res1 = mysqli_query($conn, $req1);
echo('Enregistrement réalisé avec succès');

?>