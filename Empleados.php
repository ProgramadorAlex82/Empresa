<?php
if ($_SERVER ["REQUEST_METHOD"] == "POST") {

$servername = "localhost";
$database = "Empresa";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$puesto = $_POST['puesto'];
$edad = $_POST['edad'];

// Consulta para insertar los datos en la base de datos
$sql = "INSERT INTO empleados (Nombre, Apellido, Puesto, Edad) VALUES ('$nombre', '$apellido','$puesto','$edad')";

if ($conn->query($sql)!==true) {
    echo "Error al actualizar empleado: " .$conn->error;
   exit;
} 

$empleado_id = $conn ->insert_id;

$calle = $_POST['calle'];
$carrera = $_POST['carrera'];
$numero = $_POST['numero'];
$barrio = $_POST['barrio'];
$ciudad = $_POST['ciudad'];

$sql = "INSERT INTO direcciones (Calle, Carrera, Numero, Barrio, Ciudad) VALUES ('$calle', '$carrera','$numero','$barrio','$ciudad')";

if ($conn->query($sql)!==true) {
    echo "Error al actualizar empleado: " .$conn->error;
   exit;
} 

echo "Registro Exitoso";  

$conn->close();
}
?>