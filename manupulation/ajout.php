<?php
mysqli_connect('localhost','root','','manupulation')or die('erreur connection');
$Cate = $_POST['Cate'];
$taille = $_POST['taille'];
$prix = $_POST['prix'];
$req1 = "INSERT INTO membre(Cate,taille,prix) VALUES ($Cate,$taille,$prix)";
$res1 = mysqli_query($conn, $req1);
echo('Enregistrement réalisé avec succès');

?>