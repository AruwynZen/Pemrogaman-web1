<?php

include_once('config.php');

if(isset($_POST['update'])){
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

    $result = mysqli_query($mysqli, "Update manga SET judul='$judul', subjudul='$subjudul', status='$status', genres='$genres',tahun='$tahun', author='$author', artist='$artist', sinopsis='$sinopsis', chapter='$chapter' where id ='$id'");

    header("Location: admin.php");

}



?>


<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "select * from manga where id='$id'");

while($user_data = mysqli_fetch_array($result)){
    $judul = $user_data['judul'];
    $subjudul = $user_data['subjudul'];
    $status = $user_data['status'];
    $genres = $user_data['genres'];
    $tahun = $user_data['tahun'];
    $author = $user_data['author'];
    $artist = $user_data['artist'];
    $sinopsis = $user_data['sinopsis'];
    $chapter = $user_data['chapter'];

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
                <td>Judul</td>
                <td><input type="text" class="form-control" name="judul" value="<?=$judul?>"> </td>
            </tr>
            <tr>
                <td>SubJudul</td>
                <td><input type="text" class="form-control" name="subjudul" value="<?=$subjudul?>"> </td>
            </tr>
            <tr>
                <td>Status</td>
                <td><input type="text" class="form-control" name="status" value="<?=$status?>"> </td>
            </tr>
            <tr>
                <td>Genres</td>
                <td><input type="text" class="form-control" name="genres" value="<?=$genres?>"> </td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td><input type="text" class="form-control" name="tahun" value="<?=$tahun?>"> </td>
            </tr>
            <tr>
                <td>Author</td>
                <td><input type="text" class="form-control" name="author" value="<?=$author?>"> </td>
            </tr>
            <tr>
                <td>Artist</td>
                <td><input type="text" class="form-control" name="artist" value="<?=$artist?>"> </td>
            </tr>
            <tr>
                <td>Sinopsis</td>
                <td><textarea type="text" class="form-control" name="sinopsis" value="<?=$sinopsis?>"> </textarea></td>
            </tr>
            <tr>
                <td>Chapter</td>
                <td><input type="text" class="form-control" name="chapter" value="<?=$chapter?>"> </td>
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