<?php

include_once('config.php');

if(isset($_POST['add'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name', '$email', '$mobile')");

    header("Location: index.php");
}



?>


<html>
<head>
<title>Form Tambah Data</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<div class="container">
<form name="add_user" method="post" action="add.php">
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Your Name">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email" placeholder="name@gmail.com">
    <label for="mobile">Mobile</label>
    <input type="text" class="form-control" name="mobile" placeholder="Phone Number">
  </div>
  <button type="submit" class="btn btn-primary" name="add">Submit</button>
</body>
</html>