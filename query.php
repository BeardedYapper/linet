<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<?php

header("Content-Type: aplication/vnd.ms-excel");
header("Expire: 0");
header("Cache-control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=Reportes.xls");

include("database_connection.php");

$sql_query = "SELECT distrito,clientes.nombres,clientes.telefono,`o.s`,`tipo_o.s`,pisaplex,empleados.nombre,Empleados_expediente,equipo.terminal_optica,equipo.puerto,equipo_ONT_alfanumerico,equipo.ONT_numerico,folioTek,portalero,supervisor,instalacion.metros_subterraneo,instalacion.metros_aereos,clientes.claro_folio, claro.status,claro.observacion, fecha,orden_status,observaciones,equipo.foto_ONT
 FROM Orden FULL 
 JOIN clientes on Clientes_telefono=clientes.telefono 
 JOIN empleados on empleados_expediente= empleados.expediente
 JOIN equipo on equipo_ONT_alfanumerico=ONT_alfanumerico 
 JOIN instalacion on instalacion_pisaplex=pisaplex 
 JOIN claro on clientes.claro_folio= folio";


$resultado = mysqli_query($conexion, $sql_query);
if(!$resultado)
die("Error no se pudo realizar la consulta");

?>

<table width="50%" border="1" cellpadding="10" cellspacing="1" bordercolor="#666666" style="border-collapse:collapse">
<tr>
<th>FILIAL/CONTRATISTA</th>
<th>AREA</th>
<th>COPE</th>
<th>DISTRITO</th>
<th>CLIENTE</th>
<th>TELEFONO</th>
<th>O.S</th>
<th>TIPO O.S</th>
<th>PISAPLEX</th>
<th>TECNICO</th>
<th>EXPEDIENTE</th>
<th>TERMINAL OPTICA</th>
<th>PUERTO</th>
<th>ONT ALFANUMERICO</th>
<th>ONT NUMERICO</th>
<th>FOLIO CLARO</th>
<th>STATUS</th>
<th>OBSERVACIONES</th>
<th>FOLIO TEK</th>
<th>PORTALERO</th>
<th>SUPERVISOR</th>
<th>METROS AEREOS</th>
<th>METROS SUBTERRANEOS</th>
<th>FECHA</th>
<th>STATUS</th>
<th>OBSERVACIONES</th>
<th>FOTO ONT</th>
 </tr>
<?php
while($row=mysqli_fetch_array($resultado)){   ?>
<tr>
<td>ENLACE DIGITAL</td>
<td>MERIDA</td>
<td>BUENAVISTA</td>
<td><?php echo $row['distrito']; ?> </td>
<td><?php echo $row['nombres']; ?></td>
<td><?php echo $row['telefono']; ?></td>
<td><?php echo $row['o.s']; ?></td>
<td><?php echo $row['tipo_o.s']; ?></td>
<td><?php echo $row['pisaplex']; ?></td>
<td><?php echo $row['nombre']; ?></td>
<td><?php echo $row['Empleados_expediente']; ?></td>
<td><?php echo $row['terminal_optica']; ?></td>
<td><?php echo $row['puerto']; ?></td>
<td><?php echo $row['equipo_ONT_alfanumerico']; ?></td>
<td><?php echo $row['ONT_numerico']; ?></td>
<td><?php echo $row['claro_folio']; ?></td>
<td><?php echo $row['status']; ?></td>
<td><?php echo $row['observacion']; ?></td>
<td><?php echo $row['folioTek']; ?></td>
<td><?php echo $row['portalero']; ?></td>
<td><?php echo $row['supervisor']; ?></td>
<td><?php echo $row['metros_aereos']; ?></td>
<td><?php echo $row['metros_subterraneo']; ?></td>
<td><?php echo $row['fecha']; ?></td>
<td><?php echo $row['orden_status']; ?></td>
<td><?php echo $row['observaciones']; ?></td>
<td><?php echo $row['foto_ONT']; ?></td>
</tr>

<?php
}
    ?>
    </table>
</body>
</html>