<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Recibir los datos del Formulario

    //htmlspecialchar se utiliza para sanitizar los datos y evitar problemas de seguridad como la inyeccion de codigo.
    $ci = htmlspecialchars($_POST['ci']);
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $email= htmlspecialchars($_POST['email']);
    $telefono= htmlspecialchars($_POST['telefono']);
    $estado= htmlspecialchars($_POST['estado']);

//Validar y procesar los datos
if (!empty($ci) &&!empty($nombre) && !empty($apellido) && !empty($email) && !empty($telefono) && !empty($estado)){
//Aqui podes agregar codigo para almacenar los datos en una base de datos ,enviar un correo,etc.

//Confirmar que los datos obtenidos
echo "<h2>Datos recibidos y guardados correctamente:</h2>";
echo "CI:" . $ci . "<br>";
echo "Nombre:" . $nombre . "<br>";
echo "Apellido:" . $apellido . "<br>";
echo "Correo Electronico:" . $email . "<br>";
echo "Telefono:" . $telefono . "<br>";
echo "Estado Civil:" . $estado . "<br>";
}else {
    echo "Todos los campos son obligatorios";
}
}else {
    echo "Metodo no permitido";}
?> 