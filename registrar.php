<?php
include 'conexion.php';

// Recibir los datos del formulario y almacenarlos en las variables
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$mensaje = $_POST["mensaje"];

// Insertar campos
$insertar = "INSERT INTO tblclientes (nombre, telefono, correo, mensaje) VALUES ('$nombre', '$telefono', '$correo', '$mensaje')";

// Verificar si el correo ya existe
$verificar_correo = mysqli_query($conexion, "SELECT * FROM tblclientes WHERE correo = '$correo'");

if (mysqli_num_rows($verificar_correo) > 0) {
    echo '<script>    
         alert("El cliente ya existe");
         window.history.go(-1);
        </script>';  
    exit;
}

// Ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
    echo '<script> 
            alert("Error de registro");
            window.history.go(-1);
        </script>';
} else {
    echo '<script> 
            alert("Registro efectuado correctamente");
            window.history.go(-1);
        </script>';   
}

// Cerrar conexión
mysqli_close($conexion);
?>
