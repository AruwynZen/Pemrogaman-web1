<?php

include_once('config.php');

if(isset($_POST['add'])){
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $subjudul = $_POST['subjudul'];
    $status = $_POST['status'];
    $genres = $_POST['genres'];
    $tahun = $_POST['tahun'];
    $author = $_POST['author'];
    $artist = $_POST['artist'];
    $sinopsis = $_POST['sinopsis'];
    $chapter = $_POST['chapter'];

    $result = mysqli_query($mysqli, "INSERT INTO manga(judul,subjudul,status,genres,tahun,author,artist,sinopsis,chapter) VALUES('$judul','$subjudul','$status','$genres','$tahun','$author','$artist','$sinopsis','$chapter')");

    header("Location: admin.php");
}



?>


<html>
<head>
<title>Form Tambah Data</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<div class="container border mt-2">
<form name="add_manga" method="post" action="add.php">
<div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control" name="judul">
    <label for="subjudul">subjudul</label>
    <input type="text" class="form-control" name="subjudul">
    <label for="status">Status</label>
    <input type="text" class="form-control" name="status">
    <label for="genres">Genres</label>
    <input type="text" class="form-control" name="genres">
    <label for="tahun">Tahun</label>
    <input type="text" class="form-control" name="tahun">
    <label for="author">Author</label>
    <input type="text" class="form-control" name="author">
    <label for="artist">Artist</label>
    <input type="text" class="form-control" name="artist">
    <label for="sinposis">Sinopsis</label>
    <textarea id="sinopsis" name="sinopsis" class="form-control" rows="4" cols="50"></textarea>
    <label for="chapter">Chapter</label>
    <input type="text" class="form-control" name="chapter">
  </div>
  <button type="submit" class="btn btn-primary" name="add">Submit</button>
</body>
</html>