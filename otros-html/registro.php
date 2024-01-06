<?php
// Establecer conexión con la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ing_sistemas";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesar los datos del formulario cuando se envíe
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO registro (nombre, apellido, correo, usuario, password) VALUES ('$nombre', '$apellido', '$correo', '$usuario', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Datos insertados correctamente";
    } else {
        echo "Error al insertar datos: " . $conn->error;
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../Estilos/style-registro.css">
    <title>Sistema de Gestión</title>
</head>
<body>

    <h1><a href="/index.html">SISTEMA DE GESTIÓN</a></h1>

    <div  class="regresar">
        <a href="../index.php">Regresar</a>
    </div>

    <div class="Login">

        <div class="contenedor-login">

            <h3>Register</h3>

            <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <div class="inputs">
                 <input type="text" name="nombre" id="" placeholder="Nombre" required>
                </div>
     
                 <div class="inputs">
                     <input type="text" name="apellido" id="" placeholder="Apellido" required>
                 </div>

                 <div class="inputs">
                    <input type="email" name="correo" id="" placeholder="Email" required>
                 </div>

                 <div class="inputs">
                    <input type="text" name="usuario" id="" placeholder="Username" required>
                 </div>

                 <div class="inputs">
                    <input type="password" name="password" id="" placeholder="password" required>
                 </div>

                 <div class="button">
                    <input onclick="comprobarRegistro()" type="submit" value="REGISTRARSE">
                 </div>
            </form>
        </div>

    </div>

    <div class="footer">
        <footer>Derechos Reservados de Yolvin Fumero &copy; 2023</footer>
    </div>
    
    <script src="/Script/codigo.js"></script>
</body>
</html>