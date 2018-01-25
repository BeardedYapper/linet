<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reporte</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>CREAR REPORTE</h1>
<?php

$servidor = "localhost";
$usuario = "root";
$contrasena = "ED222felipe";
$basedatos = "linet";

$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basedatos);
if(!$conexion){
die("Error No se puede conectar");
}

$sql_query = "SELECT distrito,clientes.nombre,clientes.telefono,`o.s`,`tipo_o.s`,pisaplex,empleados.nombre,Empleados_expediente,equipo.terminal_optica,equipo.puerto,equipo_ONT_alfanumerico,equipo.ONT_numerico,folioTek,portalero,supervisor,instalacion.metros_subterraneo,instalacion.metros_aereos,clientes.claro_folio, claro.status,claro.observacion, fecha,orden_status,observaciones
FROM Orden
FULL JOIN clientes on Clientes_telefono=clientes.telefono
JOIN empleados on empleados_expediente= empleados.expediente
JOIN equipo on equipo_ONT_alfanumerico=ONT_alfanumerico
JOIN instalacion on instalacion_pisaplex=pisaplex
join claro on clientes.claro_folio= folio";


$resultado = mysqli_query($conexion, $sql_query);
if(!$resultado)
die("Error no se pudo realizar la consulta");

echo'<table>';
while($row=mysqli_fetch_array($resultado)){?>

    <div class="box-content">
    <table>
    <tr>
        <td><strong> Distrito </strong></td>
        <td> <?php echo $row['distrito'] ?> </td>
    </tr>
    <tr>
        <td><strong> Cliente </strong></td>
        <td> <?php echo $row['nombre'] ?>
    </tr>
    <tr>
        <td><strong> Telefono </strong></td>
        <td> <?php echo $row['telefono'] ?> </td>
    </tr>    

    <tr>
        <td><strong> O.S </strong></td>
        <td> <?php echo $row['o.s'] ?> </td>
    </tr>  

    <tr>
        <td><strong> Tipo de O.S </strong></td>
        <td> <?php echo $row['tipo_o.s'] ?> </td>
    </tr>  

    <tr>
        <td><strong> Pisaplex </strong></td>
        <td> <?php echo $row['pisaplex'] ?> </td>
    </tr>  

    <tr>
        <td><strong> Técnico </strong></td>
        <td> <?php echo $row['nombre'] ?> </td>
    </tr>  

    <tr>
        <td><strong> Expediente </strong></td>
        <td> <?php echo $row['Empleados_expediente'] ?> </td>
    </tr>  

    <tr>
        <td><strong> Terminal Optica </strong></td>
        <td> <?php echo $row['terminal_optica'] ?> </td>
    </tr>  
  
    <tr>
        <td><strong> Puerto </strong></td>
        <td> <?php echo $row['puerto'] ?> </td>
    </tr>  
    
    <tr>
        <td><strong> ONT Alfanumerico </strong></td>
        <td> <?php echo $row['equipo_ONT_alfanumerico'] ?> </td>
    </tr>  

    <tr>
        <td><strong> ONT Numerico </strong></td>
        <td> <?php echo $row['ONT_numerico'] ?> </td>
    </tr>  

    <tr>
        <td><strong> Folio Claro </strong></td>
        <td> <?php echo $row['claro_folio'] ?> </td>
    </tr>  

    <tr>
        <td><strong> Status Claro </strong></td>
        <td> <?php echo $row['status'] ?> </td>
    </tr>  

    <tr>
        <td><strong> Observaciones Claro </strong></td>
        <td> <?php echo $row['observacion'] ?> </td>
    </tr>  
    
    <tr>
        <td><strong> Folio Tek </strong></td>
        <td> <?php echo $row['folioTek'] ?> </td>
    </tr>  

    <tr>
        <td><strong> Portalero </strong></td>
        <td> <?php echo $row['portalero'] ?> </td>
    </tr>  

    <tr>
        <td><strong> Supervisor </strong></td>
        <td> <?php echo $row['supervisor'] ?> </td>
    </tr>  

    <tr>
        <td><strong> Metros Aereos </strong></td>
        <td> <?php echo $row['metros_aereos'] ?> </td>
    </tr>  

    <tr>
        <td><strong> Metros Subterraneos </strong></td>
        <td> <?php echo $row['metros_subterraneo'] ?> </td>
    </tr>  

    <tr>
        <td><strong> Fecha Liquidada </strong></td>
        <td> <?php echo $row['fecha'] ?> </td>
    </tr>  

    <tr>
        <td><strong> Status </strong></td>
        <td> <?php echo $row['orden_status'] ?> </td>
    </tr>  

    <tr>
        <td><strong> Observacion </strong></td>
        <td> <?php echo $row['observaciones'] ?> </td>
    </tr>  

    <?php
        }
    ?>
</table>
</body>
</html>