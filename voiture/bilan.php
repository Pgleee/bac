<<<<<<< HEAD
<?php
$con=mysqli_connect('localhost','root','','cliant')or die('erreur connection');
=======
<?
$con=mysqli_connect('localhost','root','','cliant')or die('erreur connection');

$req = " SElECT idmodele , libelle , avg(securite) , avg(conduite) ,avg(confort) , count(*) 
FROM  modele m , evaluation e 
WHERE m.id_modele = e.id_modele 
GROUP BY idmodel 
";


// lezem dima group by cle primaire hedeka 3leh zedtou fi select min fou9

$res = mysqli_query($con,$req) or die('erreur requete');
if(mysqli_num_rows( $res)==0){
    echo "aucune ligne";
}
else{
    echo"
    <table border=3 bgcolor='yellow'>
        <tr>
            <td>Modèle </td>
            <td>Sécurité </td>
            <td>Conduite</td>
            <td>Confort</td>
            <td> Nbr tests</td>  
        </tr>";

    while($r = mysqli_fetch_row($res)){
    {
    echo('<tr>
        <td>'.$r[1].'</td>
        <td>'.$r[2].'</td>
        <td>'.$r[3].'</td>
        <td>'.$r[4].'</td>
        <td>'.$r[5].'</td>
    </tr>');
    }
    echo('</table>');
    }
}   

>>>>>>> 0fe9ce728c3bdd5386190db529e4e38b85d7b501
?>