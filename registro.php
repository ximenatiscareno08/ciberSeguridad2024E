<?php
$host = "192.168.100.18";
$port = "5433";
$dbname = "encriptado";
$user = "postgres";
$password = "123";

$conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conexion) {
    echo "Error al conectar a la base de datos.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    $query = "INSERT INTO tu_tabla (nombre, apellidos, edad, correo, contraseña) VALUES ('$nombre', '$apellidos', '$edad', '$correo', '$contraseña')";
    
    $result = pg_query($conexion, $query);
    
    if ($result) {
        echo "Datos recibidos correctamente y guardados en la base de datos";
    } else {
        echo "Error al guardar los datos en la base de datos";
    }
}

pg_close($conexion);
?>