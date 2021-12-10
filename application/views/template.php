<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Calligraffitti&family=Dancing+Script:wght@500&family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">


    <title>Iif-collaction | Home</title>
  </head>
  <body>

    <!-- navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container">
          <a class="navbar-brand judul nh" href="#"><?= $hero['nav_judul'] ?></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <?php
                    $drop = $this->db->get('category')->result_array();
                   foreach($drop as $l ) : ?>
                     <li><a class="dropdown-item" href="#"><?= $l['category'] ?></a></li>
                   <?php endforeach; ?>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- end navbar -->

      <!-- template -->
          <?= $content; ?>
      <!-- ebd template -->

      <!-- footer -->
      <footer class="mb-0 p-3 bg-dark text-light d-flex justify-content-center">
        <div class="row container">
          <div class="col-lg-4 d-flex align-items-center justify-content-evenly">
            <i class="bi bi-facebook" style="font-size: 25px;"></i>
            <i class="bi bi-whatsapp" style="font-size: 25px;"></i>
            <i class="bi bi-instagram" style="font-size: 25px;"></i>
            <i class="bi bi-youtube" style="font-size: 25px;"></i>
          </div>
          <div class="col-lg-4 mt-2 d-flex flex-column align-items-center justify-content-center">
            <p class="h6">&copycopyright | IIF COLLECTION</p>
            <p class="h6"><small><?= date('Y') ?></small></p>
          </div>
          <div class="col-lg-4 mt-2  d-flex flex-column align-items-center justify-content-center">
            <p class="h6 text-end"><b>DesignBy | </b><small>Azkaainurridho</small></p>
          </div>
        </div>
      </footer>
      <!-- end footer -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  </body>
</html>