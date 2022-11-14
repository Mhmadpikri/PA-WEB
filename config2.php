<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "catalog";

    $db = new mysqli($server, $username, $password, $db_name);

    if(!$db){
        die("Gagal terhubung");
    }
?>