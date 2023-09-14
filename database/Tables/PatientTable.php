<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pabau_doctors_appointments";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE Patients (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
userId INT(6) UNSIGNED,
name VARCHAR(255) NOT NULL,
surname VARCHAR(255) NOT NULL,
socialSecurityNumber INT NOT NULL,
contactInfo VARCHAR(255) NOT NULL,
FOREIGN KEY (userId) REFERENCES Users(id)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Patients created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>