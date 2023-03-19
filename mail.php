<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="shortcut icon" type="image/x-icon" href="./Css/A-propos/images/Memoji.svg">
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./Css/Confirmation/confirmation.css" />
    <link rel="stylesheet" href="/Css/white/white.css">
</head>
<body>
<?php

// Définir les informations de connexion à la base de données
$servername = "sql7.freemysqlhosting.net"; // nom du serveur
$username = "sql7605785"; // nom d'utilisateur de la base de données
$password = "2K89bXV5qZ"; // mot de passe de la base de données
$dbname = "sql7605785"; // nom de la base de données

// Établir une connexion
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérifier si la connexion a réussi
if (!$conn) {
    die("La connexion a échoué : " . mysqli_connect_error());
}

// Vérifier si le formulaire a été soumis
// Récupérer les valeurs du formulaire et les échapper
$nom = mysqli_real_escape_string($conn, $_POST["nom"]);
$prenom = mysqli_real_escape_string($conn, $_POST["prenom"]);
$adresse_mail = mysqli_real_escape_string($conn, $_POST["email"]);
$message = mysqli_real_escape_string($conn, $_POST["message"]);

// Préparer la requête SQL avec les valeurs échappées
$sql = "INSERT INTO Contact (nom, prenom, adresse_mail, message) VALUES ('$nom', '$prenom', '$adresse_mail', '$message')";

// Exécuter la requête SQL
if (mysqli_query($conn, $sql)) {  ?>
   
        <div class="txt"> 
            <div class="image">
            <img src="./Css/Confirmation/image/check.png" alt="Logo_Ok" height="80px"  width="80px">
                <div class="txt1">
                <p>Merci d'avoir pris le temps
                de <br> m'envoyer un message <span>Marouane <?php echo("$prenom"); ?> </span> ! </p> <br>
                </div>
                <div class="txt2">
                <p> Je tiens à vous informer que je l'ai bien reçu 
                et que je vais y répondre au plus vite.</p>
               </div>
            </div>
            
               
                <a href="./index.html">Revenir au Portfolio ?</a>
 
        </div>
        <div class="bulle-bas-droite"></div>
        <div class="bulle-gauche"></div>

       


<?php
} else {
    echo "Erreur : " . mysqli_error($conn);
}

// Fermer la connexion
mysqli_close($conn);

?>
</body>
</html>

