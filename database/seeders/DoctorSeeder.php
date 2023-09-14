<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pabau_doctors_appointments";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the doctor's data
$name = "John";
$surname = "Doe";
$email = "johndoe@example.com";
$password = "admin"; // Plain text password
$address = "123 Main St";
$contactInfo = "555-123-4567";

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insert the doctor record into the database
$sql = "INSERT INTO Doctor (name, surname, email, password, address, contactInfo) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $name, $surname, $email, $hashedPassword, $address, $contactInfo);

if ($stmt->execute()) {
    echo "Doctor record created successfully";
} else {
    echo "Error creating doctor record: " . $stmt->error;
}

$stmt->close();
mysqli_close($conn);
?>
