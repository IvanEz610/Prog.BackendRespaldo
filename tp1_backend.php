<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prog.Backend</title>
</head>
<body>
<h1>Hola Mundo</h1>
<?php
$Cadena="Hola Mundo";
echo $Cadena;
echo "<br>";
echo "<br>";

$Porcionpizza=100;
$Personas=20;

$Totaldecosa=$Porcionpizza+$Personas;
$Totaldecosant=$Porcionpizza-$Personas;
$Total100para1=$Porcionpizza*$Personas;
$Totalparacada1=$Porcionpizza/$Personas;
$Totalderesto=$Porcionpizza%$Personas;

echo $Totaldecosa;
echo "<br>";
echo $Totaldecosant;
echo "<br>";
echo $Total100para1;
echo "<br>";
echo $Totalparacada1;
echo "<br>";
echo $Totalderesto;

echo "<br>";
echo "<br>";
echo "<br>";

$CF="Transformación de grados Celsius a Fahrenheit";
echo $CF;

$Celsius=20;
echo "<br>";
$PasajeaFahrenheit= ($Celsius*9/5)+32;
echo $PasajeaFahrenheit;

echo "<br>";
echo "<br>";
echo "<br>";

$Rectangulo="Perímetro y Área de un Rectángulo";
echo $Rectangulo;
echo "<br>";

$Base=18;
$Altura=12;

$Rperimetro="Perímetro";
echo $Rperimetro;
echo "<br>";
$peri= 2*($Base+$Altura);
echo $peri;
echo "<br>";
echo "<br>";

$RArea="Área";
echo $RArea;
echo "<br>";
$ari= $Base*$Altura;
echo $ari;

echo "<br>";
echo "<br>";
echo "<br>";

$Circulo="Perímetro y Área de un Circulo";
echo $Circulo;
echo "<br>";

$Radio=30;

$Cperimetro="Perímetro";
echo $Cperimetro;
echo "<br>";
$cperi= 2*3.14*$Radio;
echo $cperi;
echo "<br>";
echo "<br>";

$CArea="Área";
echo $CArea;
echo "<br>";
$cari= 3.14*($Radio**2);
echo $cari;



?>
    
</body>
</html>