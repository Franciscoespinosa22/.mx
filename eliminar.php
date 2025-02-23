<?php
include 'conexion.php';

if (isset($_GET['idProd'])) {
    $idProd = $_GET['idProd'];
    $sql = "DELETE FROM productos WHERE idProd='$idProd'";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error al eliminar: " . $conn->error;
    }
}
?>
