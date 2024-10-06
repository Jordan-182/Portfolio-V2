<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fonction pour nettoyer les données utilisateur
    function clean_input($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    // Récupération et nettoyage des données
    $Name = clean_input($_POST['Name']);
    $email = clean_input($_POST['Email']);
    $subject = clean_input($_POST['Subject']);
    $message = clean_input($_POST['Message']);

    // Validation des champs requis
    if (empty($Name) || empty($subject) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($message)) {
        die("Erreur : Tous les champs requis doivent être correctement remplis.");
    }

    // Adresse email sécurisée (non visible côté client)
    $to = "contact@jordanpieton.fr";  // Remplace par ton adresse email
    $subject = "Nouveau message de $Name";
    $body = "Nom : $Name\nEmail : $email\nMessage :\n$message";
    $headers = "From: no-reply@jordanpieton.fr";

    // Envoi de l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
} else {
    echo "Méthode de requête non autorisée.";
}
?>
