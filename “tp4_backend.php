<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>“tp4_backend.php</title>
</head>
<body>

<?php
// Ejercicio 1: 
//Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.

$numerosPares = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];
foreach ($numerosPares as $numero) {
    echo $numero . "<br>";
}
echo "<hr>";
// Ejercicio 2:
//Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la matriz. Mostrar el esquema del array con print_r().

$valor = ["Pedro","Ana","34","1"];
print_r($valor);
echo "<hr>";

// Ejercicio 3:
//Crear un array asociativo e introducir los siguientes valores:
//Nombre: Pedro - Apellido: Torres - Dirección: Av. Mayor 3703 - Teléfono: 1122334455

$arrayAsociativo = [
    "Nombre" => "Pedro",
    "Apellido" => "Torres",
    "Dirección" => "Av. Mayor 3703",
    "Teléfono" => "1122334455"
];
print_r("El nombre de la persona es $arrayAsociativo[Nombre] y su apellido es $arrayAsociativo[Apellido].");
echo "<br>";
print_r(" Su dirección es $arrayAsociativo[Dirección] y su teléfono es $arrayAsociativo[Teléfono].");
echo "<hr>";

// Ejercicio 4:
//Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.

$ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
foreach ($ciudades as $ciudad) {
    echo $ciudad . "<br>";
}
echo "<hr>";

// Ejercicio 5:
//Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona, LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.

$ciudadesConIndices = [
    "MD" => "Madrid",
    "BCL" => "Barcelona",
    "LD" => "Londres",
    "NY" => "New York",
    "LA" => "Los Ángeles",
    "CCG" => "Chicago"
];
foreach ($ciudadesConIndices as $indice => $ciudad) {
    echo "El índice de $ciudad es $indice.<br>";
}
echo "<hr>";
?>
    
</body>
</html>