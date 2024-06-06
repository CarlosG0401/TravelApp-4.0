<?php

    $conexion = mysqli_connect("localhost", "root", "", "travelingweb-3.0");

    if ($conexion) {
        echo 'Conectado exitosamente';
    }else{
        echo 'No se conecto';
    }