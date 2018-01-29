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

<div class="box-content">
<table width="50%" border="1" cellpadding="10" cellspacing="0" bordercolor="#666666" style="border-collapse:collapse;"
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
<td><b>OBSERVACIONES</b></td>
<td><b>FOTO ONT</b></td>
 </tr>

<?php
while($row=mysqli_fetch_array($resultado)){
?>
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
<td><?php echo'<img src="'.$row['foto_ONT'].'" width="300px" height="300px">'; ?>"></td>
</tr>

<?php
}
    ?>
</div>
</div>
    </table>
</body>
</html>