<?php
$Name=$_POST['name'];
$Email=$_POST['email'];
$Phone=$_POST['phone'];

$connection=mysqli_connect('localhost','root','','crud') or die('Connection failed');
$query = "INSERT INTO personal_information (Name, Email, Phone) VALUES ('$Name', '$Email', '$Phone')";
$result=mysqli_query($connection,$query) or die("query failed");
Header("Location:http://localhost/Learn%20php/CRUD_Project/MainPage.php");
mysqli_close($connection);
?>