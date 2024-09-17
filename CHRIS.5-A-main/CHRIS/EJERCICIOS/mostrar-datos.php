<?php
  $username = "root";
  $password ="";
  $servername = "localhost";
  $database = "torresgemelas";

  //crear conexion 

  $conexion = new mysqli(}$servername,$username, $password.$database);

  //verificacion la conexion 
  if($conexion->connect_error){

      die("Conexion fallida : ". $conexion->connect_error);
  }
  $sql = "SELECT * FROM jugadores";
  $resultado 0 $conexion->query($sql)
$conexion->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar datos de la base de datos</title>
</head>
<body>
    <style>
        body{
            font-family: 'Times New Roman', Times, serif;
            background-color:aqua;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;
        }
        h1{
            text-align: center;
            color: black;
            margin-bottom: 20px;
        }
    </style>
    <div class="container">
        <h1>Datos de jugador de la NBA</h1>

        <?php
        if($resultado->num_rows>0):?>
        <table>
            <tr>
                <th>Nombre</th>
            </tr>
            <?phpwhile ($fila = $resultado->fetch_assoc()):?>
                <tr>
                    <td><?php echo $fila['nombre'];?></td>
                    <td><?php echo $fila['apodo'];?></td>
                    <td><?php echo $fila['equipo'];?></td>
                    <td><?php echo $fila['posicion'];?></td>
                    <td><?php echo $fila['altura'];?></td>
                    <td><?php echo $fila['peso'];?></td>
                    <td><?php echo $fila['numero'];?></td>
                    <td><?php echo $fila['edad'];?></td>
                    <td><?php echo $fila['nacionalidad'];?></td>
                    <td><?php echo $fila['puntos'];?></td>
                </tr>
                <?php endwhile;?>
        </table>
        <?php else : ?>
            <p>no se encontraron jugadores </p>
            <?php endif; ?>
    </div>
</body>
</html>