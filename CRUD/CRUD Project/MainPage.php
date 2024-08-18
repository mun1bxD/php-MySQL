<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
    <link rel="stylesheet" href="css/style.css">
    <script>
        function redirectToAddRecord() {
            window.location.href = 'AddPage.php';
        }

        function redirectToUpdateRecord(UserID) {
            window.location.href = `UpdatePage.php?id=${UserID}`;
        }

        function redirectToDeleteRecord(UserID) {
            window.location.href = `DeletePage.php?id=${UserID}`;
        }
    </script>
</head>
<body>
    <h1>CRUD Application</h1>
     <?php 
        $connection=mysqli_connect('localhost','root','','crud') or die('Connection failed');
        $query='SELECT * FROM personal_information;';
        $result=mysqli_query($connection,$query) or die("query failed");

        if(mysqli_num_rows($result)>0){
    ?> 
    <div class="add-button">
        <button onclick="redirectToAddRecord()">Add</button>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($row=mysqli_fetch_assoc($result)){
            ?> 
            <tr>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $row['Phone']; ?></td>
                <td class="action-buttons">
                    <button onclick="redirectToUpdateRecord(<?php echo $row['ID']; ?>)" id="update-button">Update</button>
                    <button onclick="redirectToDeleteRecord(<?php echo $row['ID']; ?>)" id="delete-button">Delete</button>
                </td>
            </tr>
            
            <?php } ?>
        </tbody>
    </table>
    <?php } ?>
</body>
</html>
