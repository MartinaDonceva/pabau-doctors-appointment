<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
<div class="container py-5">
    <div class="d-flex flex-column justify-content-center align-items-center">
        <h1 class="mb-4">Doctor's Appointment</h1>
        <h3 class="mb-4">Make an appointment</h3>
        <hr/>
        <div class="container">
            <div class="row d-flex flex-column justify-content-center align-items-center">
                <div class="col-8 col-lg-6">
                    <form method="post" id="appointment" action="/store">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                            <label for="name">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="surname" placeholder="Surname" name="surname">
                            <label for="surname">Surname</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="socialSecurityNumber" placeholder="Social Security Number" name="socialSecurityNumber">
                            <label for="socialSecurityNumber">Social Security Number</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="medicalCondition" placeholder="Medical Condition" name="medicalCondition">
                            <label for="medicalCondition">Medical condition</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="service" placeholder="Service" name="service">
                            <label for="service">Service</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="date" placeholder="Date" name="date">
                            <label for="date">Date</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="time" class="form-control" id="time" placeholder="Time" name="time" min="09:00" max="05:00">
                            <label for="time">Time</label>
                            <small>Office hours are from 9am to 5pm</small>
                        </div>
                        <button type="submit" class="btn btn-dark w-100 mt-4">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
<script>
    const name = document.getElementById("name");
    const surname = document.getElementById("surname");
    const socialSecurityNumber = document.getElementById("socialSecurityNumber");
    const medicalCondition = document.getElementById("medicalCondition");
    const service = document.getElementById("service");
    const date = document.getElementById("date");
    const time = document.getElementById("time");

    const form = document.getElementById("appointmentForm");

    form.addEventListener("submit", function (event) {
        event.preventDefault();

        const formData = {
            name: name.value,
            surname: surname.value,
            socialSecurityNumber: socialSecurityNumber.value,
            medicalCondition: medicalCondition.value,
            service: service.value,
            date: date.value,
            time: time.value,
        };

        fetch("/store", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(formData),
        })
            .then((response) => {
                if (!response.ok) {
                    throw new Error("Network response was not ok");
                }
                return response.json();
            })
            .then((data) => {
                console.log("Response from server:", data);
            })
            .catch((error) => {
                console.error("Error:", error);
            });
    });

</script>
<?php