<?php
session_start();

if($_POST){
    if($_POST['login-correo']=='alex' && $_POST['login-contrasena']=='123'){
        $_SESSION['logueado1']=true;
        header('location:index.php');
    }
    else{
        echo '
        <style>
            .login-incorrecto{
                display: block !important;
            }
        </style>
        ';
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="template/style.css">
</head>
<body>
    

        <div class="login" >
            <p class='login-incorrecto'><b>contraseña </b>Incorrecta</p>
            <form  class="container-login" action="login.php" method="post">
                <!-- La informacion enviado del formulario se valida en el backend en este caso php y no en una basedd -->
                <input type="text" class="btn" placeholder="Correo electronico o numero de telefono" name='login-correo'>
                <input type="text" class="btn" placeholder="contraseña" name='login-contrasena'>
                <input class="btn btn-entrar" type="submit" value="Entrar" name='login-btn-entrar'>
                <a href="">¿Olvidaste tu contraseña?</a>
                <div class="separador"></div>
                <input class="btn btn-new-acount" type="button" value="Crear cuenta nueva" name='login-btn-crearAcount'>
            </form>
            <p><b>Crea una cuenta </b>para una mejor experiencia</p>
        </div>

</body>
</html>
