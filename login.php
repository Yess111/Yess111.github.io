<?php
  
  session_start();
  if(isset($_SESSION['usuario'])){
    
    header("location: index.php");

  }
 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN Y REGISTRO -SIMARRA</title>
    <link rel="stylesheet" href="CSS/diseño.css">

</head>
<body>
     <main>
         <div class="contenedor__todo">
               <div class="caja_trasera">
                     <div class="caja__trasera_login">
                        <h3>¿Ya tiene una cuenta?</h3>
                        <p>Iniciar session para entrar en la pagina</p>
                        <button id="btn_iniciar">Iniciar Session</button>
                     </div>
                     <div class="caja__trasera_register">
                        <h3>¿Aun no tiene una cuenta?</h3>
                        <p>Registrar para que puedas iniciar sesion</p>
                        <button id="btn_register">Registrarse</button>
                     </div>
               </div>
                <div class="contenedor__login-register">

                      <form action="php/login_usuarios_bd.php" method="POST" class="formulario__login">
                        <h2>Iniciar Session</h2>
                        <input type="text" placeholder="Correo Electronico" name = "correo">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Entrar</button>
                      </form>
                      <form action="PHP/registro_usuarios_bd.php" method="POST" class="formulario__register">
                        <h2>Register</h2>
                        <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                        <input type="text" placeholder="Correo Electronico " name="correo">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="text" placeholder="Contraseña" name="contrasena">
                        <button>Register</button>
                    </form>
                </div>
         </div>
     </main>
     <script src="js/script.js"></script>
</body>
</html>