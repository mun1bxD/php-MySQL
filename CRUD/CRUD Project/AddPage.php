<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Record</title>
    <link rel="stylesheet" href="css/AddPageStyle.css">
    
</head>
<body>
    <div class="container">
        <h1>Add New Record</h1>
        <form id="add-form" action="AddRecord.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>

            <button type="submit">Add Record</button>
        </form>
    </div>
</body>
</html>
