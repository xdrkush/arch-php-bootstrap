<!DOCTYPE html>
<html lang="en">

  <!-- Head -->
  <head>
    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Titre de la Page -->
    <title>Blog | Tuto Bootrstrap</title>

    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/81855dfb83.js"
      crossorigin="anonymous"
    ></script>
    <!-- Style Css -->
    <link rel="stylesheet" href="public/css/style.css" />
  </head>
  <!-- / Head -->

  <body>
    <!-- NavBar -->
    <?php include 'views/navbar.php' ?>

    <!-- SearchBar -->
    <div class="container mt-5">
      <div class="row mt-5">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Recherche:</span>
          </div>
          <input type="text" class="form-control" placeholder="Rechercher" aria-label="Rechercher" aria-describedby="basic-addon1">
        </div>
      </div>
    </div>
    <!-- / SearchBar -->

    <!-- List de card (Article) -->
    <?php include 'views/navbar.php' ?>

    <!-- Footer -->
    <?php include 'views/footer.php' ?>

    <!-- Import JS -->
    <!-- Jquery -->
    <script src="../js/jquery.js"></script>
    <!-- Popper -->
    <script src="../js/popper.js"></script>
    <!-- Bootstrap -->
    <script src="../js/bootstrap.js"></script>

  </body>
</html>
