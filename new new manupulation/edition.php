<<<<<<< HEAD
<?php
$con=mysqli_connect('localhost','root','','____evaluation.sql')or die('erreur connection');
$cin2= $_POST['cin2'];
$cours = $_POST['cours'];
$notes = $_POST['notes'];



$req = " SElECT idmodele , libelle , avg(securite) , avg(conduite) ,avg(confort) , count(*) 
FROM  apprenant a ,cours a, evaluation e 
WHERE  $notes e = notes e
";
$res = mysqli_query($con,$req) or die('erreur requete');
if(mysqli_num_rows( $res)==0){
    echo "aucune ligne";
}
else{
    echo"
    <table border=3 bgcolor='yellow'>
        <tr>
            <td>cours </td>
            <td>moyenne </td>
            <td>nombres des notes attribues</td>
            
        </tr>";

    while($r = mysqli_fetch_row($res)){
    {
    echo('<tr>
        <td>'.$r[1].'</td>
        <td>'.$r[2].'</td>
        <td>'.$r[3].'</td>
    </tr>');
    }
    echo('</table>');
    }
} 
?>