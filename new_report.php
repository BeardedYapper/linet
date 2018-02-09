<?php


if($_POST['distrito']=="" || $_POST['cliente']== "" || $_POST['telefono']== "" || $_POST['folio_orden']=="" || $_POST['pisaplex']=="" || $_POST['terminal_optica']=="" || $_POST['ONT_alfanumerico']=="" || $_POST['ONT_numerico']==""|| $_POST['folio_claro']==""|| $_POST['fecha']=="" || $_POST['estado_claro']=="") {
    
    echo "<script>
    alert('Por favor llena todos los campos');
    window.location.href='form.php';
    </script>";
} else {
    $estado_claro=$_POST['estado_claro'];
    include("database_connection.php");
    $sql_query = "INSERT INTO claro (folio,observacion,status) 
                  VALUES ('" . $_POST["folio_claro"] . "', '" . $_POST["observacion_claro"] . "', '" . $estado_claro . "')";
      $sql_query = "INSERT INTO clente (distrito,nombres,telefono,claro_folio) 
      VALUES ('" . $_POST["distrito"] . "', '" . $_POST["cliente"] . "', '" . $_POST["telefono"]. "','" .$_POST["folio_claro"]."')";             
    mysqli_query($conexion, $sql_query);
    mysqli_close($conexion);
}
?>