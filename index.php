<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Sistema de Gestión</title>
</head>
<body>

    <h1>SISTEMA DE GESTIÓN</h1>

    <div class="Login">

        <div class="contenedor-login">

            <h3>Login</h3>

            <form method="POST" action="otros-html/login.php">
                <div class="inputs">
                 <input type="text" name="usuario" id="" placeholder="Username" required>
                 <i id="iconos" class='bx bx-user'></i>
                </div>
     
                 <div class="inputs">
                     <input type="password" name="password" id="" placeholder="password" required>
                 <i id="icono" class='bx bx-lock-alt'></i>
                 </div>
     
                 <input id="iniciar-sesion" type="submit" value="Entrar">
            </form>

            <h4>Not registered?  <a href="../Sistema_de_Gestion/otros-html/registro.php">Register</a></h4>

        </div>
        <br>

    </div>

    <div class="footer">
        <footer>Derechos Reservados de Yolvin Fumero &copy; 2023</footer>
    </div>
    
</body>
</html>