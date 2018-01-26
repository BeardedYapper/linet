<?php
header("Content-Type: aplication/vnd.ms-excel");
header("Expire: 0");
header("Cache-control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=Reportes.xls");
?>


<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reporte</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    <form action="reporte"
    name="formReport"
    id="report"
    method="post">

    <input type="buton"
    value= "Reporte"
    id="btnReport"
    onClick="conexion">

<div clas= "conexion">
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

?>

<div class="box-content">
    <table>
<tr>
<td><b>DISTRITO</b></td>
<td><b>CLIENTE</b></td>
<td><b>TELEFONO</b></td>
<td><b>O.S</b></td>
<td><b>TIPO O.S</b></td>
<td><b>PISAPLEX</b></td>
<td><b>TECNICO</b></td>
<td><b>EXPEDIENTE</b></td>
<td><b>TERMINAL OPTICA</b></td>
<td><b>DISTRITO</b></td>
<td><b>PUERTO</b></td>
<td><b>ONT ALFANUMERICO</b></td>
<td><b>ONT NUMERICO</b></td>
<td><b>FOLIO CLARO</b></td>
<td><b>STATUS</b></td>
<td><b>OBSERVACIONES</b></td>
<td><b>FOLIO TEK</b></td>
<td><b>PORTALERO</b></td>
<td><b>SUPERVISOR</b></td>
<td><b>METROS AEREOS</b></td>
<td><b>METROS SUBTERRANEOS</b></td>
<td><b>FECHA</b></td>
<td><b>STATUS</b></td>
<td><b>OBSERVACIONES</b></td></b>
 </tr>


<?php
while($row=mysqli_fetch_array($resultado)){
printf("<tr>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
</tr>",$row['distrito'],$row['nombre'],$row['telefono'],$row['o.s'],$row['tipo_o.s'],$row['pisaplex'],$row['nombre'],$row['Empleados_expediente'],$row['terminal_optica'],$row['puerto'],$row['equipo_ONT_alfanumerico'],$row['ONT_numerico'],$row['claro_folio'],$row['status'],$row['observacion'],$row['folioTek'],$row['portalero'],$row['supervisor'],$row['metros_aereos'],$row['metros_subterraneo'],$row['fecha'],$row['orden_status'],$row['observaciones']);
  

}
    
    ?>
</div>
</div>
    </table>
</body>
</html>