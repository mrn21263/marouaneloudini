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


// Exécuter une requête SQL SELECT pour afficher les enregistrements de la table contact
$sql = "SELECT * FROM Contact";
$resultat = mysqli_query($conn, $sql);

// Afficher les enregistrements dans un tableau HTML
if (mysqli_num_rows($resultat) > 0) {
    echo "<table><tr><th>Nom</th><th>Prénom</th><th>Adresse e-mail</th><th>Message</th></tr>";
    while ($row = mysqli_fetch_assoc($resultat)) {
        echo "<tr><td>" . $row["nom"] . "</td><td>" . $row["prenom"] . "</td><td>" . $row["adresse_mail"] . "</td><td>" . $row["message"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 résultats";
}

// Fermer la connexion
mysqli_close($conn);



?> 