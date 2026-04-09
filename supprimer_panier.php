<?php
include("config.php");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $conn->query("DELETE FROM panier WHERE id = $id");

    header("Location: panier.php");
}
?>
