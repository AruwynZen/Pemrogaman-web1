<?php
include_once('config.php');

$result = mysqli_query($mysqli, "select * from users");



?>

<html>
<head>
<title>Php Mysql</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
  <?php while($user_data = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]' class='btn btn-primary btn-lg active' role='button' aria-pressed='true'>Edit</a>  <a href='delete.php?id=$user_data[id]' class='btn btn-primary btn-lg active' role='button' aria-pressed='true'>Delete</a></td>";
        echo "</tr>";



    } ?>
  </tbody>
</table>
<a href="add.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Tambah Data</a>
</body>
</html>