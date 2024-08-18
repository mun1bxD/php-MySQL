Here's a concise cheat sheet for CRUD operations in PHP using MySQL:

# CRUD Operations in PHP - Cheat Sheet

## 1. **Create (Insert Data)**
### **PHP Code:**
```php
$Name = $_POST['name'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];

$connection = mysqli_connect('localhost', 'root', '', 'crud') or die('Connection failed');
$query = "INSERT INTO personal_information (Name, Email, Phone) VALUES ('$Name', '$Email', '$Phone')";
$result = mysqli_query($connection, $query) or die("Query failed");
Header("Location: MainPage.php");
mysqli_close($connection);
```
- **Purpose**: Insert a new record into the `personal_information` table.

## 2. **Read (Retrieve Data)**
### **PHP Code:**
```php
$connection = mysqli_connect('localhost', 'root', '', 'crud') or die('Connection failed');
$query = 'SELECT * FROM personal_information;';
$result = mysqli_query($connection, $query) or die("Query failed");

while($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row['ID'] . " - Name: " . $row['Name'] . " - Email: " . $row['Email'] . " - Phone: " . $row['Phone'] . "<br>";
}
mysqli_close($connection);
```
- **Purpose**: Retrieve and display all records from the `personal_information` table.

## 3. **Update (Modify Data)**
### **PHP Code:**
```php
$id = $_POST['id'];
$Name = $_POST['name'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];

$connection = mysqli_connect('localhost', 'root', '', 'crud') or die('Connection failed');
$query = "UPDATE personal_information SET Name='$Name', Email='$Email', Phone='$Phone' WHERE ID=$id";
$result = mysqli_query($connection, $query) or die("Query failed");
Header("Location: MainPage.php");
mysqli_close($connection);
```
- **Purpose**: Update an existing record in the `personal_information` table based on the ID.

## 4. **Delete (Remove Data)**
### **PHP Code:**
```php
$id = $_POST['id'];

$connection = mysqli_connect('localhost', 'root', '', 'crud') or die('Connection failed');
$query = "DELETE FROM personal_information WHERE ID=$id";
$result = mysqli_query($connection, $query) or die("Query failed");
Header("Location: MainPage.php");
mysqli_close($connection);
```
- **Purpose**: Delete a record from the `personal_information` table based on the ID.

## 5. **Navigation (JavaScript)**
### **JavaScript Code:**
```javascript
function redirectToAddRecord() {
    window.location.href = 'AddPage.php';
}

function redirectToUpdateRecord(UserID) {
    window.location.href = `UpdatePage.php?id=${UserID}`;
}

function redirectToDeleteRecord(UserID) {
    window.location.href = `DeletePage.php?id=${UserID}`;
}
```
- **Purpose**: Redirect users to the appropriate pages for adding, updating, or deleting records.

---
