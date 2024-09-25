<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $carnet = $_POST['carnet'];
    $departamento = $_POST['departamento'];
    $edad = $_POST['edad'];
    $genero = $_POST['genero'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $telefono = $_POST['telefono'];
    $carrera = $_POST['carrera'];
    $pretensionSalarial = $_POST['pretensionSalarial'];

    echo "<h1>Información del Usuario:</h1>";
    echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
    echo "Apellidos: " . htmlspecialchars($apellidos) . "<br>";
    echo "Carnet: " . htmlspecialchars($carnet) . "<br>";
    echo "Departamento de residencia: " . htmlspecialchars($departamento) . "<br>";
    echo "Edad: " . htmlspecialchars($edad) . "<br>";
    echo "Género: " . htmlspecialchars($genero) . "<br>";
    echo "Fecha de nacimiento: " . htmlspecialchars($fechaNacimiento) . "<br>";
    echo "Número de teléfono: " . htmlspecialchars($telefono) . "<br>";
    echo "Carrera: " . htmlspecialchars($carrera) . "<br>";
    echo "Pretensión salarial: $" . htmlspecialchars($pretensionSalarial) . "<br>";
}

else 
{
    echo "No se recibieron datos.";
}
?>