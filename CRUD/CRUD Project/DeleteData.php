<?php

$id=$_POST['id'];

$connection=mysqli_connect('localhost','root','','crud') or die('Connection failed');


$query = "DELETE FROM personal_information WHERE ID=$id";
$result=mysqli_query($connection,$query) or die("query failed");
Header("Location:http://localhost/Learn%20php/CRUD_Project/MainPage.php");
mysqli_close($connection);
?>