<?php

include_once('config.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $result = mysqli_query($mysqli, "Update users SET name='$name', email='$email', mobile='$mobile' where id ='$id'");

    header("Location: index.php");
}



?>


<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "select * from users where id='$id'");

while($user_data = mysqli_fetch_array($result)){
    $name = $user_data['name'];
    $email = $user_data['email'];
    $mobile = $user_data['mobile'];

}
?>

<html>
<head>
<title>Edit Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<div class="container">
<form name="update_user" method="post" action="edit.php">
        <table class="table table-striped">
            <tbody>
            <tr>
                <td>Name</td>
                <td><input type="text" class="form-control" name="name" value="<?=$name?>"> </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" class="form-control" name="email" value="<?=$email?>"> </td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="text" class="form-control" name="mobile" value="<?=$mobile?>"> </td>
            </tr>
            <tr>
            <td><input type="text" class="form-control" name="id" value="<?=$id?>"> </td>
            <td><button type="submit" class="btn btn-primary" name="update">Submit</button></td>

            </tr>
            </tbody>
        </table>
    </form>
</div>
</body>
</html>