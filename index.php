<?php include ("config.php"); ?>
<html lang="en">
    <head>
    <style>
body {
    margin: 0;
    height: 80%;
    font-family: Arial, sans-serif;
    background: orange;
}
nav {
    background-color:green;
    padding: 15px;
}
nav ul {
    display: flex;
    justify-content: center;
    list-style: none;
    gap: 800px;
}
li :hover{
    color: green;
    background-color: while;
    padding: 11px;
}
nav ul li a {
    color: orange;
    display : block;
    height: 2px;
    width: 0;
}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MA PREMIERE PAGE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Bienvenue</h1>
    
    
    <div class="aa">
        <nav>
            <ul>
                <li> <a href="resister.php">INSCRIPTION</a></li>
                <li><a href="login.php">CONNEXION </a></li>
               
            </ul>
        </nav>
    </div>
    
    </header>
</body>
<footer>
    <p> @2026  Mon site de vente de miel.  Tous droits reservés </p>
    <p><a href=""><h3><b><i>adamouyaya330@gmail.com</i></b></h3></a>
    </p>
</footer>
</html>