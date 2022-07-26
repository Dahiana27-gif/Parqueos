<?php
    $mysqli = new mysqli("localhost", "root", "", "parqueo");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MYSQL:";
    }
    
?>