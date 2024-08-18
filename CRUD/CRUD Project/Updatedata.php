<?php
$Name=$_POST['name'];
$Email=$_POST['email'];
$Phone=$_POST['phone'];
$id=$_POST['id'];

$connection=mysqli_connect('localhost','root','','crud') or die('Connection failed');

$Name = mysqli_real_escape_string($connection, $Name);
$Email = mysqli_real_escape_string($connection, $Email);
$Phone = mysqli_real_escape_string($connection, $Phone);

$query = "UPDATE personal_information SET Name='$Name', Email='$Email', Phone='$Phone' WHERE ID=$id";
$result=mysqli_query($connection,$query) or die("query failed");
Header("Location:http://localhost/Learn%20php/CRUD_Project/MainPage.php");
mysqli_close($connection);
?>