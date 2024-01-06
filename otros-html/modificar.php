<?php
$conection = mysqli_connect('localhost', 'root', '', 'ing_sistemas');


$salon = $_GET['salon'];
$sql = "SELECT * FROM salones WHERE id_salon LIKE '%$salon%';";
$resultado = mysqli_query($conection, $sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cantidadMesas = $_POST['mesasC'];
    $buenasMesas = $_POST['mesasB'];
    $malasMesas = $_POST['mesasM'];
    $faltanMesas = $_POST['mesasF'];
    
    $cantidadSillas = $_POST['sillasC'];
    $buenasSillas = $_POST['sillasB'];
    $malasSillas = $_POST['sillasM'];
    $faltanSillas = $_POST['sillasF'];

    $sql = "UPDATE salones SET Cantidad = $cantidadMesas, Buenas = $buenasMesas, Malas = $malasMesas, Faltan = $faltanMesas WHERE id_salon LIKE '%$salon%M'";
    mysqli_query($conection, $sql);
    
    $sql = "UPDATE salones SET Cantidad = $cantidadSillas, Buenas = $buenasSillas, Malas = $malasSillas, Faltan = $faltanSillas WHERE id_salon LIKE '%$salon%S'";
    mysqli_query($conection, $sql);

    header("Location: ingenieria-de-sistemas.html");
}

mysqli_close($conection);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilos/modificar-css.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Sistema de Gestión</title>
</head>
<body>

    <h1>SISTEMA DE GESTIÓN</h1>

    <div class="cerrar">
      <button class="cerrar-sesion"><a href="cerrar-sesion.php">Salir</a></button>
    </div>

    <nav>
        <ul>
          <li><a href="#">Carreras</a>
            <ul class="submenu">
              <li><a href="../otros-html/ingenieria-de-sistemas.html">Ingeniera de sistemas</a></li>
            </ul>
          </li>
        </ul>
    </nav>

    <div class="titulo-uno">
      <h3>Ingenieria de sistemas</h3>
    </div>


    <div class="Tabla-de-inmuebles">
        <form action="<?php echo $_SERVER['PHP_SELF'] . '?salon=' . $_GET['salon']; ?>" method="POST">
        <table>
          <thead>
            <tr>
              <th></th>
              <th>Cantidad</th>
              <th>Buenas</th>
              <th>Malas</th>
              <th>Faltan</th>
            </tr>
          </thead>

          <tbody>
               <tr>
                <td>Mesas</td>
                <?php  
                $mostrar=mysqli_fetch_array($resultado); 
                ?>
                <td><input type="text" name="mesasC" value="<?php echo $mostrar['Cantidad'] ?>"></td>
                <td><input type="text" name="mesasB" value="<?php echo $mostrar['Buenas'] ?>"></td>
                <td><input type="text" name="mesasM" value="<?php echo $mostrar['Malas'] ?>"></td>
                <td><input type="text" name="mesasF" value="<?php echo $mostrar['Faltan'] ?>"></td>
            </tr>
               <tr>
                <td>Sillas</td>
                <?php  
                $mostrar=mysqli_fetch_array($resultado); 
                ?>
                <td><input type="text" name="sillasC" value="<?php echo $mostrar['Cantidad'] ?>"></td>
                <td><input type="text" name="sillasB" value="<?php echo $mostrar['Buenas'] ?>"></td>
                <td><input type="text" name="sillasM" value="<?php echo $mostrar['Malas'] ?>"></td>
                <td><input type="text" name="sillasF" value="<?php echo $mostrar['Faltan'] ?>"></td>
            </tr>
          </tbody>

        </table>
    </div>

    <div class="actualizar">
            <button type="submit" class="actualizar-boton">actualizar</button>
    </div>
    </form>

       <div class="footer">
        <footer>Derechos Reservados de Yolvin Fumero &copy; 2023</footer>
       </div>
 
    
</body>
</html>