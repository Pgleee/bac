<?php
$con=mysqli_connect('localhost','root','','cliant')or die('erreur connection');
$np = $_POST['np'];
$idmodelle = $_POST['idmodelle'];
$cf = $_POST['cf'];
$cn = $_POST['cn'];
$sc = $_POST['sc'];

$dateloc=$_POST['y-m-d h:m:s'];

$req1 =' SELECT * FROM testeur WHERE $np = numpermis ' ; 
$res1 = mysqli_query($conn, $req1) or die('erreur requete');
if(mysqli_num_rows($res1)==0){
    echo('Testeur non inscrit');
}

else{
    $req2="SELECT * FROM evaluation where '$np'='np' and $idmodelle='idmodele' ";
    $res2=mysqli_query($con,$req2) or die('erreur requete');
    if(mysqli_num_rows($res2)>0){
        echo('"Vous avez déjà testé ce modèle"');
    }
    else{
        $req3="INSERT INTO evaluation values('$np','$idmodelle','$dateloc','$sc','$cn','$cf') ";
        $res3=mysqli_query($con,$req3) or die('erreur requete');
        echo("Evaluation enregistrée avec succès");
}
}

    ?>