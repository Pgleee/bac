<?php
$con=mysqli_connect('localhost','root','','cliant')or die('erreur connection');
$np = $_POST['np'];
$idmodelle $_POST['idmodelle'];
$sc $_POST['sc'];
$ck $_POST['ck'];
$dateloc=$_POST['y-m-d h:m:s'];
$req =" SELECT * FROM testeur WHERE '$idmodelle' = 'idmodelle' "; 
$res = mysqli_query($conn, $req);
if(mysqli_num_rows($res)==0){
    echo('email deja utiliser');}
else{
    $req2="SELECT*FROM evaluation where '$np'='np' and $sidmodelle='idmodelle'";
    $res2=mysqli_query($con,$req2);
    if(mysqli_num_rows($res2)==1){
        echo('"Vous avez déjà testé ce modèle"');}
}
else{
    $req2="INSERT INTO evaluation values("$np","$idmodelle","$sc","$ck") ";
    $res2=mysqli_query($con,$req2);
    echo("Evaluation enregistrée avec succès");}

