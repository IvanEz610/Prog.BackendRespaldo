<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHILE</title>

    <style>
 .container {
            display: flex; /* Usar flexbox para alinear los divs lado a lado */
        }
        .box {
            margin-right: 10px; /* Espaciado entre los divs */
            width: 100%; /* Ancho fijo para los divs */
            padding: 15px; /* Espaciado interno */
            text-align: center; /* Centrar el texto */
            background-color:rgb(224, 121, 57); /* Color de fondo */}
            .text {
                font-size: 20px; /* Tamaño de fuente */
                color: #333; /* Color del texto */

            }
    </style>
</head>
<body>
<div class="container">

<div class="box">
<?php
print "<h2>1. Del 1 al 100</h2>";
for ($i = 1; $i <= 100; $i++) {
    print "<p>$i</p>";
}
?>
</div>

<div class="box">
<?php
print "<h2>2. Del 100 al 1</h2>";
for ($i = 100; $i >= 1; $i--) {
    print "<p>$i</p>";
}
?>
</div>

<div class="box">
<?php
print "<h2>3. Números pares del 1 al 100</h2>";
for ($i = 2; $i <= 100; $i+= 2) {
    print "<p>$i</p>";
}
?>
</div>

<div class="box">
<?php   
print "<h2>4. Números impares del 1 al 100</h2>";
for ($i = 1; $i <= 100; $i+= 2) {
    print "<p>$i</p>";
}
?>
</div>

<div class="box">
<?php
print "<h2>5. Suma del 1 al 20</h2>";
$suma = 0;
for ($i = 1; $i <= 20; $i++) {
    $suma += $i;
}
print "<p>La suma del 1 al 20 es: $suma</p>";
?>
</div>

<div class="box">
<?php
print "<h2>6. Suma de pares del 1 al 20</h2>";
$sumaPares = 0;
for ($i = 2; $i <= 20; $i += 2) {
    $sumaPares += $i;
}
print "<p>La suma de los números pares del 1 al 20 es: $sumaPares</p>";
?>
</div>

</div>

</body>
</html>