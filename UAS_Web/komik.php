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
      <a href="#"><img src="jpg/title1.jpg" class="ml-auto mr-auto cover" alt=""></a>
      <div class="card-group container-xl mt-2">
        <div class="card mr-4 ml-3">
                <h4 class="pl-4">The Cute Girl Sitting Next to Me Is Trying to Make Me Fall in Love With Her as a Way to Ridicule Me, but the Tables Were Turned on Her Before She Knew It</h4>
                <p class="pl-4">Tonari no Seki ni Natta Bishoujo ga Horesaseyou to Karakatte Kuru ga Itsunomanika Kaeriuchi ni Shite Ita</p>
                <ul class="a">
                    <li>Status: Ongoing</li>
                    <li>Genres: Comedy , Slice of life , Ecchi , Romance , School life</li>
                    <li>Tahun Terbit: 2020</li>
                    <li>Author: Aresanzui</li>
                    <li>Artist: Miyako Hachi</li>
                </ul>
            <div class="card-body border container ml-auto">
            <h4>Sinopsis</h4>
            <p>Dia adalah seseorang dengan julukan “Seatmate Killer”, dan juga salah satu gadis tercantik di sekolah. Setiap siswa laki-laki yang duduk disebelahnya telah menyatakan perasaan mereka kepadanya, dan semuanya ditolak dengan sangat kejam. Orang yang duduk disebelahnya sekarang adalah seorang siswa yang duduk paling jauh dari depan dan di samping salah satu jendela, sehingga menjadi tempat duduk yang membuat setiap siswa laki-laki iri padanya yaitu Narito Yuuki. Dia adalah seorang laki-laki biasa yang tidak menarik sedikit pun. Seluruh kelas berpikir kalau dia akan jatuh cinta pada gadis “Seatmate KIller” itu dalam waktu yang singkat, tapi kenyataannya…</p>
            </div>
            <div class="card-body border container ml-auto">
            <h4>Chapter</h4>
            <p><a class="nav-item nav-link text-dark" href="chapter.php">Chapter 1</a></p>
            </div>
        </div>
    </div>
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