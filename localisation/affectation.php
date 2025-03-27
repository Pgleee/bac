<?php 
mysqli_connect('localhost','root','','bdbac2')or die('erreur connection');
$idMem = $_POST['idMem'];
$mdp1 = $_POST['mdp1'];
$numParcelle = $_POST['numParcelle'];
$jardinId = $_POST['jardinId'];

$req =" SELECT * FROM membre WHERE '$idMem'= 'idMem' and `$mdp1` = 'mdp1' "; 
$res = mysqli_query($conn, $req);
if(mysqli_num_rows($res)==0){
    echo('Membre inexistant');
}
else{
    $req2 = "SELECT idPar FROM parcelle WHERE '$numParcelle' = 'numPar' and '$jardinId' = 'idjar' ";
    $res2 = mysqli_query($conn, $req2);
    $r = mysqli_fetch_row($res2);
    $idpar = $r[0];

    
    $req3 = "SELCET * FROM affectation WHERE $idmem = idmem and $idpar=idpar";
    $res3 = mysqli_query($conn, $req3);
    if(mysqli_num_rows($res3)==1){
        echo('Affectation existante');
    }

    $d=date('Y-m-d H:i:s');
    $req4 = "INSERT INTO affectations ( idMem, idPar, dateDeb ) VALUES ( $idmem, $idpar,$d )";
    $res4= mysqli_query($conn, $req4);
    echo('Affectation réussie');
}

?>