<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes Registrados</title>
    <link rel="shortcut icon" href="./img/clientes/th.jpeg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="header">
        <h1 class="header-1">Clientes Registrados</h1>
        <div class="imagen">
            <img src="./img/clientes/th.jpeg" alt="tblclientes">
        </div>        
    </header>
    <div class="container my-4">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Teléfono</th>
                  <th scope="col">Correo</th>
                  <th scope="col">Mensaje</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'conexion.php';
                $sql = "SELECT * FROM tblclientes";
                $result = mysqli_query($conexion, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row["id"];
                    $nombre = $row["nombre"];
                    $telefono = $row["telefono"];
                    $correo = $row["correo"];
                    $mensaje = $row["mensaje"];
                    echo "<tr>
                        <th scope='row'>$id</th>
                        <td>$nombre</td>
                        <td>$telefono</td>
                        <td>$correo</td>
                        <td>$mensaje</td>
                    </tr>";
                }
                mysqli_close($conexion);
                ?>
            </tbody>
        </table>
        <a style="text-decoration: none;" href="./index.html" class="boton">Formulario</a>
    </div>
</body>
</html>

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        line-height: 1.6;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    .header {
        background-color: #DDE6ED;
        text-align: center;
        align-items: center;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-bottom: 3px solid #333;
        display: flex;
        flex-direction: column;
    }
    .header-1 {
        margin: 0;
    }
    .header .imagen img {
        max-width: 100px;
        height: auto;
        display: block;
        margin: 10px auto;
    }
    .container {
        width: 80%;
        margin: auto;
        overflow: hidden;
        padding: 20px;
    }
    .table-dark {
        width: 100%;
        margin-bottom: 1rem;
        color: #fff;
        background-color: #212529;
    }
    .table-dark th,
    .table-dark td,
    .table-dark thead th {
        border-color: #32383e;
    }
    .table-dark.table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(255, 255, 255, 0.05);
    }
    .boton {
        display: inline-block;
        padding: 10px 15px;
        font-size: 16px;
        color: #fff;
        background-color: #77b300;
        text-align: center;
        border-radius: 5px;
        margin-top: 20px;
    }
    .boton:hover {
        background-color: #6a9f00;
    }
</style>
