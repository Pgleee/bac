<?php
mysqli_connect('localhost','root','','manupulation')or die('erreur connection');
$codehabit = $_POST['codehabit'];
$cinclient = $_POST['cinclient'];
$duree = $_POST['duree'];

$dateLoc = date("Y-m-d");


$req1 =" SELECT * FROM habit WHERE `$codehabit` = 'codehabit' "; 
$res1 = mysqli_query($conn, $req1)or die("-------");
if(mysqli_num_rows($res1)==0){
    echo('Erreur : habit inexistant');
}
else{
    $req2 = " SELECT * FROM habit WHERE `$codehabit` = 'codehabit' and $disponible='N'"; 
    $res2 = mysqli_query($conn, $req2)or die("-------");
    if(mysqli_num_rows($res2)>0){
         echo(' Erreur : habit déjà loué ');
    }
    else{
        $req3=" SELECT * FROM client WHERE `$cinclient` = 'cin";
        $res3 = mysqli_query($conn, $req3)or die("-------")  ;
        if(mysqli_num_rows($res3)==0){
            echo('Erreur : client enextion');
        }
    
        else{
            $req4 = "INSERT INTO location ($dateLoc , $codehabit , $cinclient , $duree ) VALUES (dateLoc  , codeHab , cin , duree)";
            $res4 = mysqli_query($conn, $req4)or die('erreur insertion');

            $req5="UPDATE habit SET $disponible='N' WHERE '$codehabit'= '$codehabit'";
            $res5 = mysqli_query($conn, $req5)or die("-------");
            echo('Location effectuée avec succès ');
        }
    }
}

?>