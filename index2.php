<?php 
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    if (strlen($name) > 3 && is_numeric($age) && strpos($mail, '@') && strpos($mail, '.', -5)) {
        echo 'Le tue credenziali sono valide!';
    } else {
        echo 'Le tue credenziali non sono valide!';
    };
?>