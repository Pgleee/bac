<?php 
mysql_connect("localhost","root","","   ")
$cin = $_POST['cin'];
$nom= $_POST['nom'];
$prenom = $_POST['prenom'];
$tel= $_POST['tel'];
$codeArticle =$_POST['article'];   
$prixPropose =$_POST['prixPropose'];

$sqlCheck = "SELECT * FROM Client WHERE Cin = :cin";
$stmtCheck = $pdo->prepare($sqlCheck);
$stmtCheck->execute(['cin' => $cin]);

if ($Check->rowCount() === 0) {
    $InsertClient = "INSERT INTO Client (Cin, Nom, Prenom, Tel) 
                        VALUES (:cin, :nom, :prenom, :tel)";
  }
$InsertEnchere = "INSERT INTO Enchere (Cin, Code, PrixPropose) 
                     VALUES (:cin, :code, :prix)";

;
echo "<p>Votre proposition a été enregistrée avec succès !</p>";
?>