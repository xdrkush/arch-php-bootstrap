<!-- 
    Page Update ID
-->
<?php
// import du fichier database.php
require '../../db/database.php';
// on définit par default notre id en null
$id = null;

// on check si on récupère l'id dans notre method get
if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

// si il n'y a pas d'id
if (null == $id) {
    // on redirige sur la page index.php
    header("Location: ../../admin.php");
}

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
    if (empty($name)) {
        $nameError = 'Please enter Name';
        $valid = false;
    }

    if (empty($email)) {
        $emailError = 'Please enter Email Address';
        $valid = false;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = 'Please enter a valid Email Address';
        $valid = false;
    }

    if (empty($mobile)) {
        $mobileError = 'Please enter Mobile Number';
        $valid = false;
    }

    // Si tout est valid alors
    if ($valid) {
        // update data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE users  set name = ?, email = ?, mobile =? WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($name, $email, $mobile, $id));
        Database::disconnect();
        header("Location: ../../admin.php");
    }
// Sinon on récupère les datas pour les afficher sur la page
} else {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM users where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    $name = $data['name'];
    $email = $data['email'];
    $mobile = $data['mobile'];
    Database::disconnect();
}
?>