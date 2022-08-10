<?php

session_start();

if($_SESSION['logueado1']){
    // echo 'entro';l
}else{
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO D</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Barlow&family=IBM+Plex+Sans&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="template/style.css">
    
</head>
<body>
    
    <div class="header section">
        <div class="container-logo">
            <span>Logo</span>
        </div>
        <div class="container-header">
            <a href="index.php">Inicio</a>
            <!-- <a href="login.php">Login</a> -->
            <a href="cerrarSesion.php">Cerrar sesion</a>
        </div>
    </div>