<?php

    $database= new mysqli("database.cvgw8u4igtad.eu-north-1.rds.amazonaws.com","admin","12345678","edoc");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>