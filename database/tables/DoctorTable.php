<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pabau_doctors_appointments";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE Doctor (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) NOT NULL,
surname VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL,
address VARCHAR(255) NOT NULL,
contactInfo VARCHAR(255) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Doctor created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>