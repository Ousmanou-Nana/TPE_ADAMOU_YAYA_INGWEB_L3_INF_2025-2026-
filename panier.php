<?php include("config.php"); ?>
<link rel="stylesheet" href="style.css">

<h2>Mon panier 🛒</h2>

<?php
$sql = "SELECT produits.nom, produits.prix, panier.id 
        FROM panier 
        JOIN produits ON produits.id = panier.id_p";

$result = $conn->query($sql);

$total = 0;

while ($row = $result->fetch_assoc()) {
    echo "<p>{$row['nom']} - {$row['prix']} FCFA 
    <a href='supprimer_panier.php?id={$row['id']}'>❌</a></p>";
    
    $total += $row['prix'];
}

echo "<h3>Total : $total FCFA</h3>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<footer>
    <p> @2026  Mon site de vente de miel.  Tous droits reservés </p>
    <p>
    <a href="index.php">ACCUEIL</a>
    <a href="produits.php">PRODUITS</a>
    <a href="panier.php">PANIER</a>
    <a href="avis.php">AVIS</a>
    </p>
</footer>
<body>
    
</body>
</html>