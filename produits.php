<?php
// Inclusion de la connexion à la base de données
include("config.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos produits - Boutique</title>
    <style>
        /* Styles additionnels pour une grille propre */
        .produits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .produit-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            background: #fff;
            transition: transform 0.2s;
        }
        .produit-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .produit-card img {
            max-width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 4px;
        }
        .produit-card h3 {
            margin: 10px 0;
            color: #333;
        }
        .prix {
            font-size: 1.2em;
            font-weight: bold;
            color: #e67e22;
            margin: 10px 0;
        }
        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
        }
        button:hover {
            background-color: #2980b9;
        }
        footer {
            background: black;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            height: 20%;
        }
        footer a {
           color: white;
           text-decoration: none;
           margin: 0  5px;
        }
        footer a :hover {
           text-decoration: underline;
        }

    </style>
</head>
<body>
    <h2>Nos produits 🍯</h2>

    <div class="produits-grid">
        <?php
        // Récupération de tous les produits
        $result = $conn->query("SELECT * FROM produits");

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="produit-card">
                    <img src="images/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['nom']); ?>">
                    <h3><?php echo htmlspecialchars($row['nom']); ?></h3>
                    <p class="prix"><?php echo number_format($row['prix'], 0, ',', ' '); ?> FCFA</p>
                    <a href="ajouter_panier.php?id=<?php echo $row['id']; ?>">
                        <button>Ajouter au panier</button>
                    </a>
                </div>
                <?php
            }
        } else {
            echo "<p>Aucun produit disponible pour le moment.</p>";
        }
        ?>
    </div>
</body>
<footer>
    <p> @2026  Mon site de vente de miel.  Tous droits reservés </p>
    <p>
    <a href="index.php">ACCUEIL</a>
    <a href="produits.php">PRODUITS</a>
    <a href="panier.php">PANIER</a>
    <a href="avis.php">AVIS</a>
    <h3>Nous contacter via <b><i>699395946/678035432 </i></b></h3>
    <h3><b><i>adamouyaya330@gmail.com</i></b></h3>
    </p>
</footer>

</html>
