<?php

class AppointmentController {

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $databaseName = 'pabau_doctors_appointments';

            $conn = new mysqli($servername, $username, $password, $databaseName);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $socialSecurityNumber = $_POST['socialSecurityNumber'];

            // Insert patient data into the 'Patients' table using prepared statement
            $insertPatientQuery = "INSERT INTO Patients (name, surname, socialSecurityNumber) VALUES (?, ?, ?)";
            $patientStmt = $conn->prepare($insertPatientQuery);
            $patientStmt->bind_param("sss", $name, $surname, $socialSecurityNumber);
            $patientStmt->execute();

            if ($patientStmt->affected_rows > 0) {
                // Retrieve the patient ID of the newly inserted patient
                $patientId = $patientStmt->insert_id;

                // Insert appointment data into the 'Appointments' table with the patient ID
                $medicalCondition = $_POST['medicalCondition'];
                $service = $_POST['service'];
                $date = $_POST['date'];
                $time = $_POST['time'];

                $startTime = $date . ' ' . $time;
                $endTime = $date . ' ' . $time;

                // Use prepared statement for appointment query
                $insertAppointmentQuery = "INSERT INTO Appointments (patientId, startTime, endTime, status, medicalCondition, service) VALUES (?, ?, ?, 'Pending', ?, ?)";
                $appointmentStmt = $conn->prepare($insertAppointmentQuery);
                $appointmentStmt->bind_param("issss", $patientId, $startTime, $endTime, $medicalCondition, $service);
                $appointmentStmt->execute();


                if ($appointmentStmt->affected_rows > 0) {
                    echo "Appointment and patient data saved successfully!";
                } else {
                    echo "Error inserting appointment data: " . $conn->error;
                }
            } else {
                echo "Error inserting patient data: " . $conn->error;
            }

            // Close prepared statements and connection
            $patientStmt->close();
            $appointmentStmt->close();
            $conn->close();
        }
    }
}
