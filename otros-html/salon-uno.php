<?php
$conection = mysqli_connect('localhost', 'root', '', 'ing_sistemas');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $salon = $_POST['salon'];

  $sql = "SELECT * FROM salones WHERE id_salon LIKE '%$salon%';";
  $resultado = mysqli_query($conection, $sql);
}

mysqli_close($conection);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilos/salon-uno.css">
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

    <div class="contenedor">
        <div class="secciones-ingenieria-de-sistemas">
          <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <ul>
              <li><button type="submit" name="salon" value="asma-01">Salon 1</button></li>
              <li><button type="submit" name="salon" value="asma-02">Salon 2</button></li>
              <li><button type="submit" name="salon" value="asma-03">Salon 3</button></li>
              <li><button type="submit" name="salon" value="asma-04">Salon 4</button></li>
              <li><button type="submit" name="salon" value="asma-05">Salon 5</button></li>
              <li><button type="submit" name="salon" value="asma-06">Salon 6</button></li>
            </ul>
          </div>      
    
          <div class="secciones-ingenieria-de-sistemas-segundo-div">
            <ul>
              <li><button type="submit" name="salon" value="asma-07">Salon 7</button></li>
              <li><button type="submit" name="salon" value="asma-08">Salon 8</button></li>
              <li><button type="submit" name="salon" value="asma-09">Salon 9</button></li>
              <li><button type="submit" name="salon" value="asma-10">Salon 10</button></li>
              <li><button type="submit" name="salon" value="asma-11">Salon 11</button></li>
              <li><button type="submit" name="salon" value="asma-12">Salon 12</button></li>
            </ul>
          </form>
         </div>
       </div>

      <div class="Tabla-de-inmuebles">

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
              <?php 
              if (isset($_POST)) {
                if ( $resultado->num_rows > 0){
                  $mostrar=mysqli_fetch_array($resultado);

                  echo '<tr>';
                  
                  echo '<td>Mesas</td>';
                  echo '<td>' . $mostrar['Cantidad'] . '</td>';
                  echo '<td>' . $mostrar['Buenas'] . '</td>';
                  echo '<td>' . $mostrar['Malas'] . '</td>';
                  echo '<td>' . $mostrar['Faltan'] . '</td>';

                  echo '</tr>';
                  
                  $mostrar=mysqli_fetch_array($resultado);
                  
                  echo '<tr>';
                  
                  echo '<td>Sillas</td>';
                  echo '<td>' . $mostrar['Cantidad'] . '</td>';
                  echo '<td>' . $mostrar['Buenas'] . '</td>';
                  echo '<td>' . $mostrar['Malas'] . '</td>';
                  echo '<td>' . $mostrar['Faltan'] . '</td>';

                  echo '</tr>';
                } else {
                  echo '<tr>';
                  echo '<td></td>';
                  echo '<td rows="4">No hay datos</td>';
                  echo '</tr>';
                }
              }
              ?>
          </tbody>

        </table>

      </div>

      <div class="modificar">
      <button class="modificar-boton">
        <?php if ($_SERVER['REQUEST_METHOD'] == "POST") { ?>
        <a href="modificar.php?salon=<?php echo $salon; ?>">Modificar</a>
        <?php } ?>
      </button>
    </div>

      <div class="footer">
        <footer>Derechos Reservados de Yolvin Fumero &copy; 2023</footer>
      </div>
 
    
</body>
</html>