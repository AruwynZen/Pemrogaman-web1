<?php
include_once('config.php');

$result = mysqli_query($mysqli, "select * from manga");

?>

<html>
<head>
<title>Php Mysql</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../login.php?pesan=belum_login");
	}
	?>
  <button type="button" class="btn btn-outline-primary m-2"><a href="admin/logout.php">LOGOUT</a></button>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Judul</th>
      <th scope="col">SubJudul</th>
      <th scope="col">Status</th>
      <th scope="col">Genres</th>
      <th scope="col">Tahun</th>
      <th scope="col">Author</th>
      <th scope="col">Artist</th>
      <th scope="col">Sinopsis</th>
      <th scope="col">Chapter</th>
    </tr>
  </thead>
  <tbody>
  <?php while($user_data = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$user_data['judul']."</td>";
        echo "<td>".$user_data['subjudul']."</td>";
        echo "<td>".$user_data['status']."</td>";
        echo "<td>".$user_data['genres']."</td>";
        echo "<td>".$user_data['tahun']."</td>";
        echo "<td>".$user_data['author']."</td>";
        echo "<td>".$user_data['artist']."</td>";
        echo "<td>".$user_data['sinopsis']."</td>";
        echo "<td>".$user_data['chapter']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]' class='btn btn-primary btn-lg active' role='button' aria-pressed='true'>Edit</a>  <a href='delete.php?id=$user_data[id]' class='btn btn-primary btn-lg active' role='button' aria-pressed='true'>Delete</a></td>";
        echo "</tr>";



    } ?>
  </tbody>
</table>
<a href="add.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Tambah Data</a>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>
</html>