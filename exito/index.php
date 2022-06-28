<?php 
session_start();
if ($_SESSION['sesion'] == false) {
    header("Location: ../index.html"); }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="../img/favicoin.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
</head>
<body>             
    <main>
        <div class="contenedor">
            <div class="img_center">
                <img src="../img/netflix_logo.png" alt="Netflix Logo">
            </div>
            <div class="mensaje">
                <h1>Actualización exitosa.</h1>
                <p>Tus datos fueron actualiados en nuestro base de datos de forma exitosa!</p>
            </div>
            <div class="button">
                <div class="button_button">
                    <a href="https://www.netflix.com/es/login">Login</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>