<?php include("config.php"); ?>

<form method="POST"><br>
    <input type="text" name="nom" placeholder="Votre nom"> <br> <br>
    <textarea name="message"></textarea>
    <button type="submit">Envoyer</button>
</form>

<?php
if ($_POST) {
    $nom = $_POST['nom'];
    $msg = $_POST['message'];

    $conn->query("INSERT INTO avis (nom, message) VALUES ('$nom','$msg')");
}

$res = $conn->query("SELECT * FROM avis");

while ($row = $res->fetch_assoc()) {
    echo "<p><b>{$row['nom']}</b>: {$row['message']}</p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
       .avis{
           display: flex;
           justify-content:center
           gap: 20px;
           flex warp: warp;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

</body>
<footer>
    <p> @2026  Mon site de vente de miel.  Tous droits reservés </p>
    <p>
    <a href="index.php">ACCUEIL</a>
    <a href="produits.php">PRODUITS</a>
    <a href="panier.php">PANIER</a>
    <a href="avis.php">AVIS</a>
    </p>
</footer>
</html>