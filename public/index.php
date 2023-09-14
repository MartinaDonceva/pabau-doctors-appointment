<?php

include_once '../@core/Request.php';
include_once '../@core/Router.php';
include_once '../src/controllers/AppointmentController.php';
$router = new Router(new Request);

$router->get('/', function() {
    include '../templates/appointment-form.php';
});

$router->post('/store', function () {
    $appointmentController = new AppointmentController();
    $appointmentController->store();
});

