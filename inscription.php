<?php
// Connexion à la base de données (remplacez les valeurs par les vôtres)
$serveur = "localhost";
$utilisateur = "nom_utilisateur";
$mot_de_passe = "mot_de_passe";
$base_de_donnees = "nom_base_de_donnees";

$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// Vérification de la connexion
if ($connexion->connect_error) {
    die("La connexion a échoué : " . $connexion->connect_error);
}

// Récupération des données du formulaire
$nom = $_POST['nom'];
$email = $_POST['email'];
$password = $_POST['password'];

// Insertion des données dans la base de données
$sql = "INSERT INTO utilisateurs (nom, email, mot_de_passe) VALUES ('$nom', '$email', '$password')";

if ($connexion->query($sql) === TRUE) {
    echo "Inscription réussie !";
} else {
    echo "Erreur : " . $sql . "<br>" . $connexion->error;
}

// Fermeture de la connexion
$connexion->close();
?>
