<?php
    $server = 'localhost';
    $root = 'berchj';
    $password='asharot13';
    $database='DATA';
    $conexion = mysqli_connect($server,$root,$password)or die(mysqli_error($conexion));
    mysqli_select_db($conexion,$database)or die(mysqli_error($conexion));




?>