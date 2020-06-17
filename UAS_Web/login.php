<!DOCTYPE html>
<html>
<head>
    <title>SignUp</title>
    <!-- Boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
?>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form  class="form-signin" action="loginsys.php" method="post">
              <div class="form-label-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
              </div>

              <div class="form-label-group">
                <label for="inputPassword">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
              </div>
              <br>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="Login">Sign in</button>
              <hr class="my-4">
              </form>
              <button class="btn btn-lg btn-primary btn-block text-uppercase"><a class="text-white" href="index.php">Back to Main Menu</a></button>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>
</html>