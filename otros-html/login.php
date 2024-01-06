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

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['password'];

    $sql = "SELECT * FROM registro WHERE usuario = '$usuario' AND password = '$contrasenia';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0 ) {
        echo "<script>alert('Login exitoso!'); </script>";
        $conn->close();

        $_SESSION['logged'] = 1;

        header("location: sistema-gestion.html");
    } else{
        echo "<script>alert('Datos invalidos!'); </script>";
        $conn->close();

        header("location: registro.php");
    }
}

?>
