<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h3>Connexion</h3>

<form method="POST">
    <label for="text">Email</label>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <label for="password">Mot de pase</label>
    <input type="password" name="password" placeholder="Mot de passe" required><br><br>
    <button type="submit" name="login">Se connecter</button>
</form>

</body>
<?php
session_start();

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM utilisateurs WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $user = $result->fetch_assoc();

        $_SESSION['nom'] = $user['nom'];
        $_SESSION['email'] = $user['email'];

        echo "✅ Connexion réussie";
        header ("Location: produits.php");
        exit();
        // redirection possible
        // header("Location: accueil.php");

    } else {
        echo "❌ Email ou mot de passe incorrect";
    }
}
?>
</html>


