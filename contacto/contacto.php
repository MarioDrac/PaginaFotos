<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Cambia esto por el nombre del servidor de tu base de datos
$username = "usuario"; // Cambia esto por tu nombre de usuario de MySQL
$password = "contraseña"; // Cambia esto por tu contraseña de MySQL
$dbname = "nombre_base_de_datos"; // Cambia esto por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// Consulta SQL para crear la tabla
$sql = "CREATE TABLE contacto (
  id_contacto int(13) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre varchar(100) NOT NULL,
  apellidos varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  telefono varchar(13) NOT NULL,
  fecha datetime NOT NULL DEFAULT current_timestamp(),
  direccion varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "La tabla contacto se creó correctamente";
} else {
    echo "Error al crear la tabla: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
