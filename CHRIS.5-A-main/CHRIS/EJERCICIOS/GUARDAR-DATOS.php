<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NBA</title>
</head>
<body>
    <style>
        body{
            font-family: 'Times New Roman', Times, serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 400px;
        }
        .container{
            background-color:bisque;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rebeccapurple;
        }
        h1{
            text-align: center;
            color: white;
            margin-bottom: 5px;
            display: block;
        }
        label{
            font-weight: bold;
            color:black;
            margin-bottom: 5px;
            display: block;
        }
        input{
          font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
          width: 100%;
          color: red;
        }
    </style>

    <div class="container">
        <h1> Introducir los jugadores de la NBA</h1>
        <form action="guardar-datos.php" method="post">
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="apodo"> Apodo: </label>
            <input type="text" id="apodo" name="apodo" required>
            <label for="equipo">Equipo: </label>
            <input type="text" id="equipo" name="equipo" required>
            <label for="posicion">Posicion: </label>
            <input type="text" id="posicion" name="posicion" required>
            <label for="altura">Altura: </label>
            <input type="text" id="altura" name="altura" required>
            <label for="peso">Peso: </label>
            <input type="text" id="peso" name="peso" required>
            <label for="numero">Numero: </label>
            <input type="text" id="numero" name="numero" required>
            <label for="edad">Edad: </label>
            <input type="text" id="edad" name="edad" required>
            <label for="nacionalidad">Nacionalidad: </label>
            <input type="text" id="nacionalidad" name="nacionalidad" required>
            <label for="punto">Punto: </label>
            <input type="text" id="puntos" name="puntos" required>
            <div class="button">
                <button type="submit">Guardar</button>
                <button type="reset">Limpiar</button>
            </div>
        </form>
    </div>
</body>
</html>