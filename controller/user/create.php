<?php
// import du fichier database.php
require '../../db/database.php';

// Si il y a une method post
if (!empty($_POST)) {
    // On définit nos variables à envoyer
    $nameError = null;
    $emailError = null;
    $mobileError = null;

    // On définit la valeur de nos variable au résultat de la method post
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    // On check nos variable input:
    $valid = true;
    // On check notre name
    if (empty($name)) {
        // variable de l'err
        $nameError = 'Please enter Name';
        // si il n'y a pas de name alors
        $valid = false;
    }

    if (empty($email)) {
        // variable de l'err
        $emailError = 'Please enter Email Address';
        // si il n'y a pas d'email alors
        $valid = false;
        // Ici on check si l'email respect bien le format e@mail.com
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // variable de l'err
        $emailError = 'Please enter a valid Email Address';
        // si il n'y a pas d'email alors
        $valid = false;
    }

    if (empty($mobile)) {
        // variable de l'err
        $mobileError = 'Please enter Mobile Number';
        // si il n'y a pas de mobile alors
        $valid = false;
    }

    // Si tout est valid alors
    if ($valid) {
        // insert data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO users (name,email,mobile) values(?, ?, ?)";
        $q = $pdo->prepare($sql);
        $q->execute(array($name, $email, $mobile));
        Database::disconnect();
        header("Location: index.php");
    }
}
?>