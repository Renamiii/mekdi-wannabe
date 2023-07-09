<?php
$data = file_get_contents('mekdi.json');
$menu = json_decode($data, true);


$menu =  $menu["menu"];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rex Mekdi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="img/mekdi-logo.png" alt="logo" width="60">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">All Menu</a>
      </div>
    </div>
  </div>
</nav>

<div class="container">
    
    <div class="row">
        <div class="col">
            <h1>All Menu</h1>
        </div>
    </div>

    <div class="row">
        <?php foreach ($menu as $row) : ?>
        <div class="col-md-4">
        <div class="card mb-3" style="width: 18rem;">
            <img src="img/<?= $row["gambar"]; ?>" class="card-img-top" alt="ayam">
              <div class="card-body">
                <h5 class="card-title"><?= $row["nama"]; ?></h5>
                <p class="card-text"><?= $row["deskripsi"]; ?></p>
                <h5 class="card-title">Rp. <?= $row["harga"]; ?></h5>
                <a href="#" class="btn btn-danger">Pesan Sekarang</a>
                 </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

</div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  </body>
</html>