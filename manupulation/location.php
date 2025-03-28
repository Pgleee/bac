<?php
mysqli_connect('localhost','root','','manupulation')or die('erreur connection');
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
        $req2 =" SELECT * FROM habit ,  WHERE `$codehabit` = 'codehabit' and $disponible=N"; 
        $res2= mysqli_query($conn, $req);
        $r=mysqli_fetch_row($res2);
        $disponible=$r[1];
        if(mysqli_num_rows($re2)==0){
            echo('"Erreur : habit déjà loué" ');

}

$req3=" SELECT * FROM client WHERE `$cinclient` = 'cinclient' and $cin='cin"; 
$res3 = mysqli_query($conn, $req);
if(mysqli_num_rows($res)==0){
    echo('Erreur : client enextion');   
else{
    $req4 = "INSERT INTO location ($codehabit, $cinclient, $duree, $dateLoc) VALUES (codehabit, cinclient, duree, 'dateLoc')";
    $res4 = mysqli_query($conn, $req4);
    $r=mysqli_fetch_row($res4);
        $disponible=$r[1];
        echo('"Location effectuée avecsuccès')


}
}
}

?>