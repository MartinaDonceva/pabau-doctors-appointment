<?php

return [
    "env" => "prod",
    "enableLog" => true,
    "baseurl" => "http://localhost:8000",
    "params" => [
        "maintenance" => true,
        "maintenance_msg" => "We are now working on the site. Please see you later"
    ],
    "database" => [
        "host" => "localhost",
        "user" => "root",
        "password" => "",
        "driver" => "mysql",
        "database" => "pabau_doctors_appointments",
    ]
];