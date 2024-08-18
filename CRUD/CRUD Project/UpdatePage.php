<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
    <link rel="stylesheet" href="css/UpdatePageStyle.css">
</head>
<body>
    <div class="container">
        <h1>Update Record</h1>
        <?php 
        $connection=mysqli_connect('localhost','root','','crud') or die('Connection failed');
        
        $userID=$_GET['id'];
        $query="SELECT * FROM personal_information WHERE ID={$userID};";
        $result=mysqli_query($connection,$query) or die("query failed");

        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
        ?> 
        <form id="update-form" method="post" action="Updatedata.php">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" readonly value="<?php echo $row['ID']; ?>">

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required value="<?php echo $row['Name']; ?>">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required value="<?php echo $row['Email']; ?>">

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required value="<?php echo $row['Phone']; ?>">

            <button type="submit">Update Record</button>

            <?php 
            }
        }
        mysqli_close($connection);
         ?>
        </form>
    </div>

</body>
</html>
