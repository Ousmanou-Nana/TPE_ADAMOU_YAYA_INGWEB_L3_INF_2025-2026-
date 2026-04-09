<?php
include("config.php");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Vérifier si le produit existe déjà dans le panier
    $check = $conn->query("SELECT * FROM panier WHERE id = $id");

    if ($check->num_rows > 0) {
        // Produit déjà présent → augmenter quantité
        $conn->query("UPDATE panier SET quantite = quantite + 1 WHERE id = $id");
    } else {
        // Nouveau produit → ajouter
        $conn->query("INSERT INTO panier (id, quantite) VALUES ($id, 1)");
    }

    header("Location: panier.php");
}
?>