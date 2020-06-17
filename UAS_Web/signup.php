<?php

include_once('config.php');

if(isset($_POST['add-user'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($mysqli, "INSERT INTO users(name,username,password) VALUES('$name','$username','$password')");

    header("Location: index.php");
}



?>


<html>
<head>
<title>SignUp</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<div class="container">
<div class="row">
<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
<div class="card card-signin my-5">
<div class="card-body">
<h5 class="card-title text-center">Sign Up</h5>
<form name="add_manga" method="post" action="signup.php">
<div class="form-label-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-primary mt-2" name="add-user">Submit</button>
</div>
</div>
</div>
</div>
</div>
</body>
</html>