<?php
include_once('config.php');

$result = mysqli_query($mysqli, "select * from users");
?>

<!DOCTYPE html>
<html>

<head>
  <title>Ex-Manga</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">

  <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&family=Roboto+Slab:wght@800&display=swap"
    rel="stylesheet">

</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-xl">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand logo text-light mt-2 mb-2" href="#">Ex-Manga</a>
      <form class="form-inline my-2 my-lg-0 bg-white">
        <input class="mr-sm-2 form" type="search" placeholder="Search" aria-label="Search">
        <button class="btn my-2 my-sm-0 bg-transparent" type="submit"><img src="jpg/icon.png"></button>
      </form>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-light bg-light border-top border-bottom">
    <div class="container-xl">
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <div class="navbar-nav mr-auto mt-lg-0">
          <a class="nav-item nav-link active text-dark" href="index.php">HOMEPAGE</a>
          <a class="nav-item nav-link text-dark" href="mangalist.php">MANGA LIST <span class="sr-only">(current)</span></a>
        </div>
      </div>
    </div>
  </nav>

  <!-- List -->
  <div class="container-xl mt-2 pt-2 pb-4 border">
      <div class="text-center">
      <h4>She Cute Girl Sitting Next to Me Is Trying to Make Me Fall in Love With Her as a Way to Ridicule Me, but the Tables Were Turned on Her Before She Knew It</h4>
      <p>Semua Chapter ada di <a class="nav-link active text-dark" href="komik.php">She Cute Girl Sitting Next to Me</a></p>
      </div>
      <div class="dropdown pl-4">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Chapter
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Chapter 1</a>
        </div>
    </div>
      <div class="card-group container-xl mt-2">
      <div class="card mr-4">
          <a class="nav-item nav-link active text-dark" href="komik.php">
            <img src="komik/title.jpg" class="card-img-top" alt="...">
            <img src="komik/01.jpg" class="card-img-top" alt="...">
            <img src="komik/02.jpg" class="card-img-top" alt="...">
            <img src="komik/03.jpg" class="card-img-top" alt="...">
            <img src="komik/04.jpg" class="card-img-top" alt="...">
            <img src="komik/05.jpg" class="card-img-top" alt="...">
            <img src="komik/06.jpg" class="card-img-top" alt="...">
            <img src="komik/07.jpg" class="card-img-top" alt="...">
          </a>
        </div>
    </div>
    <!-- <button type="button" class="btn btn-primary ml-4 mt-4 mr-4 block">< Preious Chapter </button>
    <button type="button" class="btn btn-primary ml-auto mt-4"> Next Chapter > </button> -->

    <nav class="navbar navbar-expand-lg navbar-primary bg-light mr-4">
    <div class="container">
    <button type="button" class="btn btn-primary">< Preious Chapter </button>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
        <button type="button" class="btn btn-primary"> Next Chapter > </button>
        </div>
      </div>
    </div>
  </nav>

  </div>

  <!-- Footer -->
  </div>
  <nav class="navbar navbar-expand-lg navbar-primary bg-primary mt-3">
    <div class="container mt-3 mb-3">
      <a class="nav-item nav-link active text-white" href="#">© 2020 Ex-Manga Inc. All rights reserved</a>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="https://facebook.com"><img src="JPG/fb-transp.png"></a>
          <a class="nav-item nav-link active" href="https://twitter.com"><img src="JPG/twitter.png"></a>
          <a class="nav-item nav-link active" href="https://instagram.com"><img src="JPG/ig.png"></a>
        </div>
      </div>
    </div>
  </nav>




  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
</body>

</html>