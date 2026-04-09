<?php include ("config.php"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="POST">
    <h3>Inscription</h3>

    <label for="name">Nom:</label>
    <input type="text" name="nom" placeholder="Nom" required><br><br>
    <label for="name">Prénom:</label>
    <input type="text" name="prenom" placeholder="Prénom" required><br><br>
    <label for="date">Date de naissance:</label>
    <input type="date" name="date" required><br><br>
    <label for="ville">Lieu de naissance:</label>
    <input type="text" name="lieu" placeholder="Lieu de naissance" required><br><br>
    <label for="ville">Ville Actuelle:</label>
    <input type="text" name="ville" placeholder="Ville" required><br><br>
    <label for="text">Telephone:</label>
    <input type="text" name="phone" placeholder="Téléphone" required><br><br>
    <label for="text">Email:</label>
    <input type="email" name="email" placeholder ="Email" required><br><br>
    <label for="password">Mot de passe:</label>
    <input type="password" name="password" required><br><br>
    <label for="password">Confirmer:</label>
    <input type="password" name="confirm" required><br><br>

    <button type="submit" name="submit">S'inscrire</button>
</form>
<?php
if(isset($_POST['submit'])){

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date = $_POST['date'];
    $lieu = $_POST['lieu'];
    $ville = $_POST['ville'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    // Vérification mot de passe
    if($password != $confirm){
        echo "❌ Les mots de passe ne correspondent pas";
    } else {

        $sql = "INSERT INTO utilisateurs (nom, prenom, date_naissance, lieu, ville, phone, email, password)
                VALUES ('$nom', '$prenom', '$date', '$lieu', '$ville', '$phone', '$email', '$password')";

        if($conn->query($sql)){
            echo "✅ Inscription réussie";
            header ("Location: produits.php");
            exit();
        } else {
            echo "❌ Erreur : " . $conn->error;
        }
    }
}
?>

</body>
</html>




