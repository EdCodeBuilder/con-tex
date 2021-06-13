    <?php include_once("../../componente/libreria/libreria.php"); ?>
    <script src="../../js/nomina/generarPago.js"></script>
    <body onload="Enviar('CONSULTAR',null)">
    <form name="frmGenerarPago" id="frmGenerarPago">
        <div class="margen" align="center">
            <label>
                <h1>Generar Pago</h1>
            </label>
            <div class="container form-group">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-3">
                        <input type="hidden" name="hidIdGenerarPago" id="hidIdGenerarPago" value="">
                        <input type="hidden" name="hidIdEmpleado" id="hidIdEmpleado" value="">
                        <label class="col-form-label">Empleado</label>
                        <input type="text" name="txtEmpleado" id="txtEmpleado" value="" class="caja form-control" placeholder="Empleado">
                    </div>
                    <div class="col-12 col-sm-2">
                        <label class="col-form-label">Fecha inicio</label>
                        <input type="date" class="caja form-control" name="datFechaInicio" value="" id="datFechaInicio"
                            placeholder="Fecha Inicio">
                    </div>
                    <div class="col-12 col-sm-2">
                        <label class="col-form-label">Fecha Fin</label>
                        <input type="date" class="caja form-control" name="datFechaFin" value="" id="datFechaFin"
                            placeholder="Fecha Fin">
                    </div>
                    <div class="col-12 col-sm-2">
                        <label class="col-form-label">Fecha de pago</label>
                        <input type="date" class="caja form-control" name="datFechaPago" value="" id="datFechaPago"
                            placeholder="Fecha Pago">
                    </div>
                    <div class="col-12 col-sm-2">
                        <label class="col-form-label">Valor</label>
                        <input type="number" class="caja form-control" name="numValorPago" value="" id="numValorPago disabled"
                            placeholder="Valor Pago" disabled>
                    </div>
                    <div class="col-12 col-sm-auto">
                        <input type="button" class="boton form-control btn-light btn-outline-primary" name="btnGenerar" id="btnGenerar" value="Generar valor" 
                            onclick="Enviar('GENERAR',null);">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-2">
                    <input type="button" class="boton form-control btn-light btn-outline-primary" name="btnBuscar" id="btnBuscar" value="BUSCAR" placeholder="Código del empleado" onclick="Enviar('CONSULTAR',null);">
                </div>
                <div class="col-12 col-sm-2">
                    <input type="button" class="boton form-control btn-light btn-outline-primary" name="btnRegistrar" value="REGISTRAR" id="btnRegistrar" placeholder="Descripción" onclick=" Enviar('ADICIONAR',null);">
                </div>
                <div class="col-12 col-sm-2">
                    <input type="button" class="boton form-control btn-light btn-outline-primary" name="btnModificar" value="MODIFICAR" id="btnModificar" placeholder="Modificar" onclick=" Enviar('MODIFICAR',null);">
                </div>
                <div class="col-12 col-sm-2">
                    <input type="button" class="boton form-control btn-light btn-outline-primary" name="btnLimpiar" value="LIMPIAR" id="btnLimpiar" placeholder="Limpiar" onclick=" Limpiar();">
                </div>
            </div>
                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table id="tableDatos" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <td align="center">Empleado</td>
                                        <td align="center">Valor pago</td>
                                        <td align="center">Fecha</td>
                                        <td align="center">Modificar</td>
                                        <td align="center">Eliminar</td>
                                    </tr>
                                </thead>
                                <tbody id="resultado">
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </form>
</body>