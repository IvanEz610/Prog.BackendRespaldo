<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prog.Backend2</title>
</head>
<body>

<?php
echo "<br>";
$saludo="HOLA MUNDO";
echo "<h2>$saludo</h2>";?>
<br><hr>

<?php // Ejercicio 1
echo "<br>";
$num=10;
echo "Variable = $num <br>";
if ($num>0) {
    echo "El número $num es positivo <br>";
}
?>
<br><hr>

<?php // Ejercicio 2 
$num1=5;
echo "<br>";
echo "Variable = $num1 <br>";
if ($num1>1 && $num1<10) {
    echo "El número $num1 es mayor a 1 y menor a 10<br>";
}
?>
<br><hr>

<?php // Ejercicio 3
$num2=100;
echo "<br>";
echo "Variable = $num2 <br>";
if ($num2>10)  {
    echo "El número $num2 es mayor a 10<br>"; 
} elseif ($num2>2 && $num2<10) {
    echo "El número $num2 es mayor a 2 y menor a 10<br>";

} elseif ($num2==2) {
    echo "El número $num2 es igual a 2<br>";
} elseif ($num2==10) {
    echo "El número $num2 es igual a 10<br>";
}
 else {
    echo "El número $num2 es menor a 2<br>";
}
// Hice agregados para que el código sea logico y no presente incongruencias.
?>
<br><hr>

<?php
// Ejercicio 4
echo "<br>";
$número1=20;
$número2=10;
echo "Variable 1 = $número1 <br>";
echo "Variable 2 = $número2 <br>";

$suma=$número1+$número2;
$resta=$número1-$número2;
$multiplicacion=$número1*$número2;
$divisionentera=$número1/$número2;
$divisionresto=$número1%$número2;

echo "<br>";
if ($número1>$número2) {
    echo 
    "Suma de ambas variables= $número1+$número2 = $suma<br>
    Resta de ambas variables= $número1-$número2 = $resta<br>";
} elseif ($número1<$número2) {
    echo 
    "Multiplicacion de ambas variables= $número1*$número2 = $multiplicacion<br>
    Division entera de ambas variables= $número1/$número2 = $divisionentera<br>
    Division resto de ambas variables= $número1%$número2 = $divisionresto<br>";
} else {
    echo "Los números ingresados son iguales<br>";
}
?>
</body>
</html>