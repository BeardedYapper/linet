<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulario</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel "stylesheet">
</head>
<body>
<div class="container">
<table align="center">
<div class="text-center" style="padding:50px">
<div class="Jumbotron">
<h2> FORMULARIO REPORTE</h2>
<br>
<br>
<form  action="blabla.php">

<div class="form-group">
<label for="distrito" class="control-label">Indique Distrito</label>
<input type="text" class="form-control" id="distrito" placeholder="Ingrese el distrito">
</div>

<div class="form-group">
<label for="cliente">Nombre del Cliente</label>
<input type="text" class="form-control" id="cliente" placeholder="Ingrese el Nombre del cliente">
</div>

<div class="form-group">
<label for="telefono">Número de Telefono</label>
<input type="tel" class="form-control" id="telefono" placeholder="Ingrese el número de telefono">
</div>

<div class="form-group">
<label for="o.s">Folio de Orden de Servicio</label>
<input type="text" class="form-control" id="o.s">
</div>

<div class="form-group">
<label for="pisaplex">Anotar Pisaplex</label>
<input type="text" class="form-control" id="pisaplex">
</div>

<div class="form-group">
<label for="tipo_o.s">Tipo de Orden de Servicio</label>
<select class="form-control" id="tipo_o.s">
<option> TS1L7SG</option>
<option> TS2L7SG</option>
<option> A91LPBG</option>
<option> A92LPBG</option>
<option> A0MLPBG</option>
<option> A01MLPBG</option>
<option> D11LPBG</option>
<option> D21LPBG</option>
<option> TV1LPBGPI</option>
<option> TI2L</option>
<option> TS1MLPBG</option>
<option> TV2LPBGPI</option>
<option> TSML7SG</option>
<option> D210PBGPI</option>
<option> A01LPBGPE</option>
<option> D220PBGPI</option>
<option> D110PBG</option>
<option> A02MLPBG</option>
<option> A010PBG</option>
<option> A720PBG</option>
</select>
</div>

<div class="form-group">
<label for="tecnico">Nombre del Técnioc</label>
<select class="form-control" id="tecnico">
<option> XOOL TUN LUIS ALBERTO</option>
<option> QUINTAL MARTINEZ DAVID</option>
<option> ROSAS CANCHE JOEL AUGUSTO</option>
<option> CONRADO SANDOVAL SERGIO ENRIQUE</option>
<option> DOMINGUEZ IZQUIERDO DANIEL ISAIAS</option>
<option> DANIEL ANTONIO MEDINA</option>
<option> LAVANDEROS NOVELO JOSE FRANCISCO</option>
<option> ECHEVERRIA XOOL EDWIN RENE</option>
<option> MARTINEZ RIOS ENRIQUE</option>
<option> SOSA HERRERA MARTIN ANTONIO</option>
</select>
</div>

<div class="form-group">
<label for="expediente">Expediente a Liquidar</label>
<select class="form-control" id="expediente">
<option>2250402</option>
<option> 2250403</option>
<option> 2250407</option>
<option> 2250477</option>
<option> 2250410</option>
<option> 2250451</option>
<option> 2250461</option>
<option> 2251392</option>
<option> 2251393</option>
<option> 2251394</option>
<option> 2251395</option>
<option> 2251417</option>
<option> 2251418</option>
<option> 2251419</option>
<option> 2251420</option>
<option> 2251400</option>
<option> 2251401</option>
</select>
</div>

<div class="form-group">
<label for="terminal_optica"><b>Terminal en la que se conecto</b></label>
<input type="text" class="form-control" id="terminal_optica">
</div>

<div class="form-group">
<label> <input type="radio" id="puerto"> 1 </label>
<label> <input type="radio" id="puerto"> 2 </label>
<label> <input type="radio" id="puerto"> 3 </label>
<label> <input type="radio" id="puerto"> 4 </label>
<label> <input type="radio" id="puerto"> 5 </label>
<label> <input type="radio" id="puerto"> 6 </label>
<label> <input type="radio" id="puerto"> 7 </label>
<label> <input type="radio" id="puerto"> 8 </label>
</div>
<br>
<div class="form-group">
<label>Tipo de Instalación</label>
<br>
<input type="radio">Aereo
<input type="radio">Subterraneo
</div>
<br>
<div class="form-group">
<label for"metraje">Metraje de Instalación</label>
<select class="form-control" id="metraje">
<option> 25</option>
<option>50</option>
<option>75</option>
<option>100</option>
<option>125</option>
<option>150</option>
<option>175</option>
<option>200</option>
<option>250</option>
<option>300</option>
</select>
</div>

<div class="form-group">
<label for="terminal_optica">Terminal en la que se conecto</label>
<input type="text" class="form-control" id="terminal_optica">
</div>

<div class="form-group">
<label for="ONT_alfanumerico">Indicar Número de Serie</label>
<input type="text" class="form-control" id="ONT_alfanumerico">
</div>

<div class="form-group">
<label for="ONT_numerico">Número de Serie Telmex</label>
<input type="text" class="form-control" id="ONT_numerico">
</div>

<div class="form-group">
<label for="claro_folio">Anotar Folio Claro ó OTT</label>
<input type="text" class="form-control" id="folio_claro">
</div>
<br>
<div class="form-group">
<label>Estado del Claro Video</label>
<br>
<input type="radio">Activado <br>
<input type="radio">Pendiente de Activación de CV
</div>
<br>
<div class="form-group">
<label>Tipo de Instalación</label>
<br>
<input type="radio">Aereo
<input type="radio">Subterraneo
</div>

<div class="form-group">
<label for"observacion_claro">Observación de Claro Video</label>
<select class="form-control" id="observacion_claro">
<option> ACTIVADO</option>
<option>YA CONTABA CON EL SERVICIO CLARO VIDEO</option>
<option>EL CLIENTE NO REQUIERE CLARO VIDEO</option>
<option>EL CLIENTE NO TIENE CORREO ELECTRONICO</option>
<option>EL CLIENTE TITULAR DE LA LINEA NO SE ENCUENTRA EN EL DOMICILIO</option>
<option>EL CLIENTE YA TIENE REGISTRADO SU CORREO EN OTRA LINEA</option>
<option>PROBLEMAS CON LA ACTIVACION AUTOMATICA</option>
<option>SI, LLAME AL CALL CENTER, PERO NO PUDIERON ACTIVAR CLARO VIDEO EN EL NUMERO DEL CLIENTE</option>
<option>SI, LLAME AL CALL CENTER, PERO NO CONTESTAN</option>
<option>NO HE LLAMADO AL CALL CENTER</option>
<option>ACTIVE CON ACTIVACION AUTOMATICA, PERO LA ACTIVACION NO APARECE EN EL VERIFICADOR</option>
<option>ACTIVE EN EL CALL CENTER, PERO  LA ACTIVACION NO APARECE EN EL VERIFICADOR</option>
</select>
</div>


</form>
</div>
</div>
</table>
</div>
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>