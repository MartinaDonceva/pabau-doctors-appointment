<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pabau_doctors_appointments";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE Appointments (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
patientId INT(6) UNSIGNED NOT NULL,
startTime DATETIME NOT NULL,
endTime DATETIME NOT NULL,
status ENUM('Active', 'Inactive', 'Pending') NOT NULL,
medicalCondition TEXT NOT NULL,
service TEXT NOT NULL,
FOREIGN KEY (patientId) REFERENCES Patients(id)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Appointments created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>