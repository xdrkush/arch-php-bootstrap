<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
  <!-- Meta -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Titre de la Page -->
  <title>Admin | Tuto Bootrstrap</title>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/81855dfb83.js" crossorigin="anonymous"></script>
  <!-- Style Css -->
  <link rel="stylesheet" href="public/css/style.css" />
</head>
<!-- / Head -->

<body>

  <?php include 'views/navbarAdmin.php' ?>

  <!-- Collapse -->
  <div class="container mt-5 pt-4">
    <div class="accordion" id="accordionExample">

    <!-- Table Gestion des Articles -->
    <?php include 'views/admin/tableArticle.php' ?>

    <!-- Table Gestion des Users -->
    <?php include 'views/admin/tableUser.php' ?>      

    </div>
  </div>
  <!-- / Collapse -->

  <?php include 'views/modals/modalEdit.php' ?>

  <?php include 'views/modals/modalDelete.php' ?>

  <?php include 'views/modals/modalLogout.php' ?>

  <?php include 'views/footer.php' ?>

  <!-- Import JS -->
  <!-- Jquery -->
  <script src="public/js/jquery.js"></script>
  <!-- Popper -->
  <script src="public/js/popper.js"></script>
  <!-- Bootstrap -->
  <script src="public/js/bootstrap.js"></script>

</body>

</html>