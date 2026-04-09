<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Sécurisation des données
    $name = htmlspecialchars($_POST["name"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // TON EMAIL (destination)
    $to = "Kratosarchitecture@gmail.com";

    $subject = "Nouveau message depuis Kratos Architecture";

    $body = "
    Nom: $name
    Prénom: $prenom
    Email: $email

    Message:
    $message
    ";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès 🚀";
    } else {
        echo "Erreur lors de l'envoi ❌";
    }
}
?>