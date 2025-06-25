<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpMyAdmin Potrero</title>
</head>
<body>
    <h1>Tienda de ropa</h1>

    <h2>Lista de ropa</h2>
    <p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>
<!-- 2-A -->
<table border="1">
    <tr>
        <th>ID</th>
        <th>TIPO DE PRENDA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
    </tr>
 <?php
    // 1) Conexion
    $conexion=mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($conexion,"tienda");

    // 2) Preparar la orden SQL

    $consulta="SELECT*FROM ropa";

    // 3) Ejecutar la orden y obtenemos los registros

     $datos= mysqli_query ($conexion, $consulta);

    // 4) Mostrar los datos del registro

    while ( $reg =mysqli_fetch_array($datos) ) { ?>
        <tr>
        <td><?php echo $reg['id']; ?></td>
        <td><?php echo $reg['prenda']; ?></td>
        <td><?php echo $reg['marca']; ?></td>
        <td><?php echo $reg['talle']; ?></td>
        <td><?php echo $reg['precio']; ?></td>
        </tr>
    <?php } ?>
</table>

<br>
<br>

<p>La siguiente lista muestra los datos de la ropa cuya prenda sea ‘buzo’ y que actualmente esta en stock.</p>
<!-- 2-B -->
<table border="1">
    <tr>
        <th>ID</th>
        <th>TIPO DE PRENDA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
    </tr>
 <?php
    // 1) Conexion
    $conexion=mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($conexion,"tienda");

    // 2) Preparar la orden SQL

    $consulta2 ="SELECT*FROM ropa WHERE prenda = 'buzo'";

    // 3) Ejecutar la orden y obtenemos los registros

     $datos2= mysqli_query ($conexion, $consulta2);

    // 4) Mostrar los datos del registro

    while ( $reg =mysqli_fetch_array($datos2) ) { ?>
        <tr>
        <td><?php echo $reg['id']; ?></td>
        <td><?php echo $reg['prenda']; ?></td>
        <td><?php echo $reg['marca']; ?></td>
        <td><?php echo $reg['talle']; ?></td>
        <td><?php echo $reg['precio']; ?></td>
        </tr>
    <?php } ?>
</table>

<br>
<br>

<p>La siguiente lista muestra los datos de la ropa cuya marca sea ‘nike' y que actualmente esta en stock.</p>
<!-- 2-C -->
<table border="1">
    <tr>
        <th>ID</th>
        <th>TIPO DE PRENDA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
    </tr>
 <?php
    // 1) Conexion
    $conexion=mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($conexion,"tienda");

    // 2) Preparar la orden SQL

    $consulta3 ="SELECT*FROM ropa WHERE marca = 'nike'";

    // 3) Ejecutar la orden y obtenemos los registros

     $datos3= mysqli_query ($conexion, $consulta3);

    // 4) Mostrar los datos del registro

    while ( $reg =mysqli_fetch_array($datos3) ) { ?>
        <tr>
        <td><?php echo $reg['id']; ?></td>
        <td><?php echo $reg['prenda']; ?></td>
        <td><?php echo $reg['marca']; ?></td>
        <td><?php echo $reg['talle']; ?></td>
        <td><?php echo $reg['precio']; ?></td>
        </tr>
    <?php } ?>
</table>

<br>
<br>

<p>La siguiente lista muestra los datos de la ropa cuyo precio sea mayor a ‘500’ y que actualmente esta en stock.</p>
<!-- 2-D -->
<table border="1">
    <tr>
        <th>ID</th>
        <th>TIPO DE PRENDA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
    </tr>
 <?php
    // 1) Conexion
    $conexion=mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($conexion,"tienda");

    // 2) Preparar la orden SQL

    $consulta4 ="SELECT*FROM ropa WHERE precio > '500'";

    // 3) Ejecutar la orden y obtenemos los registros

     $datos4= mysqli_query ($conexion, $consulta4);

    // 4) Mostrar los datos del registro

    while ( $reg =mysqli_fetch_array($datos4) ) { ?>
        <tr>
        <td><?php echo $reg['id']; ?></td>
        <td><?php echo $reg['prenda']; ?></td>
        <td><?php echo $reg['marca']; ?></td>
        <td><?php echo $reg['talle']; ?></td>
        <td><?php echo $reg['precio']; ?></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>