<?php
header("Content-Type: aplication/vnd.ms-excel");
header("Expire: 0");
header("Cache-control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=Reportes.xls");

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
?>

<div class="box-content">
<table width="50%" border="1" cellpadding="10" cellspacing="0" bordercolor="#666666" id="Exportar_a_Excel" style="border-collapse:collapse;"
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