<?php
header("Content-Type: aplication/vnd.ms-excel");
header("Expire: 0");
header("Cache-control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=Reportes.xls");

include("database_connection.php");

$sql_query = "SELECT distrito,clientes.nombre,clientes.telefono,`o.s`,`tipo_o.s`,pisaplex,empleados.nombre,Empleados_expediente,equipo.terminal_optica,equipo.puerto,equipo_ONT_alfanumerico,equipo.ONT_numerico,folioTek,portalero,supervisor,instalacion.metros_subterraneo,instalacion.metros_aereos,clientes.claro_folio, claro.status,claro.observacion, fecha,orden_status,observaciones,equipo.foto_ONT
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

<table width="50%" border="1" cellpadding="10" cellspacing="0" bordercolor="#666666" style="border-collapse:collapse" text-align:center>
<tr>
<th><b>DISTRITO</b></th>
<th><b>CLIENTE</b></th>
<th><b>TELEFONO</b></th>
<th><b>O.S</b></th>
<th><b>TIPO O.S</b></th>
<th><b>PISAPLEX</b></th>
<th><b>TECNICO</b></th>
<th><b>EXPEDIENTE</b></th>
<th><b>TERMINAL OPTICA</b></th>
<th><b>PUERTO</b></th>
<th><b>ONT ALFANUMERICO</b></th>
<th><b>ONT NUMERICO</b></th>
<th><b>FOLIO CLARO</b></th>
<th><b>STATUS</b></th>
<th><b>OBSERVACIONES</b></th>
<th><b>FOLIO TEK</b></th>
<th><b>PORTALERO</b></th>
<th><b>SUPERVISOR</b></th>
<th><b>METROS AEREOS</b></th>
<th><b>METROS SUBTERRANEOS</b></th>
<th><b>FECHA</b></th>
<th><b>STATUS</b></th>
<th><b>OBSERVACIONES</b></th>
<th><b>FOTO ONT</b></th>
 </tr>

<?php
while($row=mysqli_fetch_array($resultado)){   ?>
<tr>
<td><?php echo $row['distrito']; ?> </td>
<td><?php echo $row['nombre']; ?></td>
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
<td><img src="<?php echo $row['foto_ONT'] ?>" width="100" height="50"/></td>
</tr>

<?php
}
    ?>
    </table>
</body>
</html>