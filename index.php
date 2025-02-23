<?php
include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario de Productos</title>
    <style>
        table { width: 50%; border-collapse: collapse; margin-top: 20px; }
        table, th, td { border: 1px solid black; padding: 10px; text-align: center; }
        .eliminar { color: red; font-weight: bold; text-decoration: none; }
    </style>
</head>
<body>
    <h2>Registro de Productos</h2>
    <form action="insertar.php" method="POST">
        <label>ID Producto: </label> <input type="text" name="idProd"><br>
        <label>Nombre: </label> <input type="text" name="nombre"><br>
        <label>Precio: </label> <input type="text" name="precio"><br>
        <label>Existencia: </label> <input type="text" name="existencia"><br>
        <button type="submit">Registrar</button>
    </form>

    <h2>Lista de Productos</h2>
    <table>
        <tr>
            <th>ID</th><th>Nombre</th><th>Precio</th><th>Existencia</th><th>Acción</th>
        </tr>
        <?php
        $query = "SELECT * FROM productos";
        $result = $conn->query($query);
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['idProd']}</td>
                <td>{$row['nombre']}</td>
                <td>\${$row['precio']}</td>
                <td>{$row['existencia']}</td>
                <td><a class='eliminar' href='eliminar.php?idProd={$row['idProd']}'>Eliminar</a></td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>
