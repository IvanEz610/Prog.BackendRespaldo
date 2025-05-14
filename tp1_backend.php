<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prog.Backend</title>
</head>
<body>
<?php
echo "<b >Hola Mundo</b> <br><br>";
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

echo "$Totaldecosa <br>";
echo "$Totaldecosant <br>";
echo "$Total100para1 <br>";
echo "$Totalparacada1 <br>";
echo "$Totalderesto <br>";

echo "<br> <br>";

$CF="Transformación de grados Celsius a Fahrenheit";
echo "$CF <br>";
$Celsius=20;
$PasajeaFahrenheit= ($Celsius*9/5)+32;
echo "20°C a Fahrenheit = $PasajeaFahrenheit <br><br><br>";


$Rectangulo="Perímetro y Área de un Rectángulo";
echo "$Rectangulo <br>";
$Base=18;
$Altura=12;

$peri= 2*($Base+$Altura);
echo "- Perímetro = $peri <br>";
$ari= $Base*$Altura;
echo "- Área = $ari <br>";
echo "<br><br>";


$Circulo="Perímetro y Área de un Circulo";
echo "$Circulo <br>";
$Radio=30;

$cperi= 2*3.14*$Radio;
echo "- Perímetro = $cperi <br>";
$cari= 3.14*($Radio**2);
echo "- Área = $cari";



?>
    
</body>
</html>