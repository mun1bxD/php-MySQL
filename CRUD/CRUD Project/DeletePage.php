<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Record</title>
    <link rel="stylesheet" href="./css/DeletePageStyle.css">
</head>
<body>
    <div class="container">
        <h1>Delete Record</h1>
        <form id="delete-form" method="post" action="DeleteData.php">
            <label for="id">Enter ID to Delete:</label>
            <input type="text" id="id" name="id" value="" required>

            <button type="submit">Delete Record</button>
        </form>
    </div>
</body>
</html>
