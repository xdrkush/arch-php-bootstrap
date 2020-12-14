<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
  <!-- Meta -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Titre de la Page -->
  <title>Home | Tuto Bootrstrap</title>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/81855dfb83.js" crossorigin="anonymous"></script>
  <!-- Style Css -->
  <link rel="stylesheet" href="./public/css/style.css" />

</head>
<!-- / Head -->

<body>

  <!-- Navbar -->
  <?php include 'include/navbar.php' ?>

  <!-- Header -->
  <?php include 'include/header.php' ?>

  <!-- Liste de card (Dernier Article) -->
  <?php include 'include/cardListNew.php' ?>

  <!-- Contact -->
  <?php include 'include/contact.php' ?>

  <!-- Footer -->
  <?php include 'include/footer.php' ?>

  <!-- Pop-up -->
  <?php include 'include/other/popup.php' ?>

  <!-- Import JS -->
  <!-- Jquery -->
  <script src="public/js/jquery.js"></script>
  <!-- Popper -->
  <script src="public/js/popper.js"></script>
  <!-- Bootstrap -->
  <script src="public/js/bootstrap.js"></script>

</body>

</html>