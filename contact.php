<?php
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 01 Jan 1990 00:00:00 GMT');

// Clé secrète reCAPTCHA
$recaptchaSecret = '6Lc33V4qAAAAABlqyl7BSLNd19uYXKRHZzqBzjmF';

// Vérifie si les données reCAPTCHA existent
if (isset($_POST['g-recaptcha-response'])) {
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    // Appel à l'API de Google pour vérifier la réponse reCAPTCHA v3
    $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$recaptchaResponse}");
    $responseData = json_decode($verify);

    if ($responseData->success && $responseData->score >= 0.5) {
        // Récupération des données du formulaire
        $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
        $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
        $objet = isset($_POST['subject']) ? htmlspecialchars(trim($_POST['subject'])) : '';
        $message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';

        // Test d'affichage des données récupérées (temporaire)
        file_put_contents('test.log', "Nom: $name, Email: $email, Objet: $objet, Message: $message\n", FILE_APPEND);

        // Vérifie si les données du formulaire sont présentes
        if (!empty($name) && !empty($email) && !empty($message)) {
            $to = "contact@jordanpieton.fr";
            $subject = "Nouveau message de $name";
            $body = "Nom: $name\nEmail: $email\nObjet: $objet\n\nMessage:\n$message";
            $headers = "From: $email";

            // Envoi de l'email
            if (mail($to, $subject, $body, $headers)) {
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false, 'error' => 'Erreur d\'envoi du mail.']);
            }
        } else {
            echo json_encode(['success' => false, 'error' => 'Données du formulaire manquantes.']);
        }
    } else {
        echo json_encode(['success' => false, 'error' => 'Vérification reCAPTCHA échouée ou score insuffisant.']);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Aucune vérification reCAPTCHA effectuée.']);
}
?>
