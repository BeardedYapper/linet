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
<div class="text-center" style="padding:50px">
    
    <h1> FORMULARIO REPORTE</h1>
    <br>
    <br>
    <form  action="blabla.php">

            <div class="container">
                          <br>
                                        <br>
                        <h3> Datos del Cliente</h3> 
                        <br>
                        <div class="form-group">
                            <label for="distrito" class="control-label"><b>Indique Distrito</b></label>
                            <input type="text" class="form-control" id="distrito" placeholder="Ingrese el distrito"/>
                        </div>

                        <div class="form-group">
                            <label for="cliente"><b>Nombre del Cliente</b></label>
                            <input type="text" class="form-control" id="cliente" placeholder="Ingrese el Nombre del cliente"/>
                        </div>

                        <div class="form-group">
                        <label for="telefono"><b>Número de Telefono</b></label>
                        <input type="tel" class="form-control" id="telefono" placeholder="Ingrese el número de telefono"/>
                        </div>
                    </div>
                
                                <h3> Información de la orden </h3>
                        <br>
                            <div class="form-group">
                                <label for="o.s"><b>Folio de Orden de Servicio</b></label>
                                <input type="text" class="form-control" id="o.s" placeholder="Inserte el folio de la orden">
                            </div>

                            <div class="form-group">
                                <label for="pisaplex"><b>Anotar Pisaplex</b></label>
                                <input type="text" class="form-control" id="pisaplex" placeholder="Ingrese el Pisaplex">
                            </div>

                            <div class="form-group">
                                <label for="tipo_o.s"><b>Tipo de Orden de Servicio</b></label>
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
                  
             
                                <h3> Información del Técnico </h3><br>
                            <div class="form-group">
                            <label for="tecnico"><b>Nombre del Técnico</b></label>
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
                            <label for="expediente"><b>Expediente a Liquidar</b></label>
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
               
  
                            <h3>Información de la instalación</h3><br>
                            <div class="form-group">
                            <label for="terminal_optica"><b>Terminal en la que se conecto</b></label>
                            <input type="text" class="form-control" id="terminal_optica" placeholder="Ejemplo: B2">
                            </div>
                            
                            
                            <label for="puerto"><b>Puerto en el que se conecto</b></label>
                            <br>
                            <label class="radio-inline"><input type="radio" name="puerto">1</label>
                            <label class="radio-inline"><input type="radio" name="puerto">2</label>
                            <label class="radio-inline"><input type="radio" name="puerto">3</label>
                            <label class="radio-inline"><input type="radio" name="puerto">4</label>
                            <label class="radio-inline"><input type="radio" name="puerto">5</label>
                            <label class="radio-inline"><input type="radio" name="puerto">6</label>
                            <label class="radio-inline"><input type="radio" name="puerto">7</label>
                            <label class="radio-inline"><input type="radio" name="puerto">8</label>
                            
                            

                            <br>
                            <label><b>Tipo de Instalación</b></label>
                            <br>
                            <label class="radio-inline"><input type="radio" name="instalacion">Aereo</label>
                            <label class="radio-inline"><input type="radio" name="instalacion">Subterraneo</label>
                            
                            <br>
                            <div class="form-group">
                            <label for"metraje"><b>Metraje de Instalación</b></label>
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
                            <label for="ONT_alfanumerico"><b>Indicar Número de Serie</b></label>
                            <input type="text" class="form-control" id="ONT_alfanumerico" placeholder="Ingre el número de serie alfanumerico">
                            </div>

                            <div class="form-group">
                            <label for="ONT_numerico"><b>Número de Serie Telmex</b></label>
                            <input type="text" class="form-control" id="ONT_numerico" placeholder="Ingrese el numero de serie numerico">
                            </div>

                            
                            <br>
                            <h3>Información de Claro Video</h3>     <br>                            
                            <div class="form-group">
                            <label for="claro_folio"><b>Anotar Folio Claro ó OTT</b></label>
                            <input type="text" class="form-control" id="folio_claro" placeholder="Ingrese el Folio ClaroVideo">
                            </div>
                            <br>
                            <div class="form-group">
                            <label><b>Estado del Claro Video</b></label>
                            <br>
                            <input type="radio">Activado <br>
                            <input type="radio">Pendiente de Activación de CV
                            </div>
                            <br>
                            <div class="form-group">
                            <label><b>Tipo de Instalación</b></label>
                            <br>
                            <input type="radio">Aereo
                            <input type="radio">Subterraneo
                            </div>

                            <div class="form-group">
                            <label for"observacion_claro"><b>Observación de Claro Video</b></label>
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

                            <div class="form-group">
                            <label for"fecha"><b>Fecha de Liquidación</b></label>
                            <input type="date" class="form-control" id="fecha">
                            </div>

                            <div class="form-group">
                            <label for"folio"><b>Folio de validación</b></label>
                            <input type="text" class="form-control" id="folio">
                            </div>
                            </b>
             </div>
    </form>
</div>
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>