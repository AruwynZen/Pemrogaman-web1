<?php 
require_once('config.php');

$id = $_GET['id'];

$result = mysqli_query($mysqli, "delete from manga where id ='$id'");

header('Location:admin.php');
?>