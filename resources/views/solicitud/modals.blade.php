<div id="modalRegistrar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="success-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-success py-1">
                <h4 class="modal-title" id="success-header-modalLabel">Nueva Solicitud</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card m-0">
                            <div class="card-body p-2">
                                <!-- <h4 class="header-title mb-3"> Basic Wizard</h4> -->
                                <form>
                                    <div id="basicwizard">
                                        <ul class="nav nav-pills nav-justified form-wizard-header mb-3">
                                            <li class="nav-item">
                                                <a href="#basictab1" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2 active"> 
                                                    <i class="mdi mdi-account-circle me-1"></i>
                                                    <span class="d-none d-sm-inline">Cliente</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#basictab2" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                    <i class="mdi mdi-face-profile me-1"></i>
                                                    <span class="d-none d-sm-inline">Representante</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#basictab3" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                    <i class="mdi mdi-checkbox-marked-circle-outline me-1"></i>
                                                    <span class="d-none d-sm-inline">Reclamo</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#basictab4" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                    <i class="mdi mdi-checkbox-marked-circle-outline me-1"></i>
                                                    <span class="d-none d-sm-inline">Archivos</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#basictab5" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                    <i class="mdi mdi-checkbox-marked-circle-outline me-1"></i>
                                                    <span class="d-none d-sm-inline">Fechas</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content b-0 mb-0">
                                            <div class="tab-pane active" id="basictab1">
                                                <div class="row">
                                                    <div class="col-lg-4 mb-2">
                                                        <label class="form-label m-0" for="clientec">Cliente</label>
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-text" id="clientecp"><i class="dripicons-chevron-right"></i></span>
                                                            <input type="text" class="form-control" id="clientec" placeholder="Nombre completo" aria-describedby="clientecp" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-2">
                                                        <label class="form-label m-0" for="dnic">DNI</label>
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-text" id="dnicp"><i class="dripicons-chevron-right"></i></span>
                                                            <input type="text" class="form-control" id="dnic" placeholder="DNI" aria-describedby="dnicp" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-2">
                                                        <label class="form-label m-0" for="rucc">RUC</label>
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-text" id="ruccp"><i class="dripicons-chevron-right"></i></span>
                                                            <input type="text" class="form-control" id="rucc" placeholder="RUC" aria-describedby="ruccp" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-2">
                                                        <label class="form-label m-0" for="direccionc">Direccion</label>
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-text" id="direccioncp"><i class="dripicons-chevron-right"></i></span>
                                                            <input type="text" class="form-control" id="direccionc" placeholder="Direccion" aria-describedby="direccioncp" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-2">
                                                        <label class="form-label m-0" for="urbanizacionc">Urbanizacion</label>
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-text" id="urbanizacioncp"><i class="dripicons-chevron-right"></i></span>
                                                            <input type="text" class="form-control" id="urbanizacionc" placeholder="Urb" aria-describedby="urbanizacioncp" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-2">
                                                        <label class="form-label m-0" for="provinciac">Provincia</label>
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-text" id="provinciacp"><i class="dripicons-chevron-right"></i></span>
                                                            <input type="text" class="form-control" id="provinciac" placeholder="Provincia" aria-describedby="provinciacp" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-2">
                                                        <label class="form-label m-0" for="distritoc">Distrito</label>
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-text" id="distritocp"><i class="dripicons-chevron-right"></i></span>
                                                            <input type="text" class="form-control" id="distritoc" placeholder="Distrito" aria-describedby="distritocp" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-2">
                                                        <label class="form-label m-0" for="telefonoc">Telefono</label>
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-text" id="telefonocp"><i class="dripicons-chevron-right"></i></span>
                                                            <input type="text" class="form-control" id="telefonoc" placeholder="Telefono" aria-describedby="telefonocp" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="basictab2">
                                                <div class="row">
                                                    <div class="col-lg-4 mb-2">
                                                        <label class="form-label m-0" for="representanter">Representante</label>
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-text" id="representanterp"><i class="dripicons-chevron-right"></i></span>
                                                            <input type="text" class="form-control" id="representanter" placeholder="Nombre completo" aria-describedby="representanterp" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-2">
                                                        <label class="form-label m-0" for="dnir">DNI</label>
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-text" id="dnirp"><i class="dripicons-chevron-right"></i></span>
                                                            <input type="text" class="form-control" id="dnir" placeholder="DNI" aria-describedby="dnirp" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-2">
                                                        <label class="form-label m-0" for="medidorr">Medidor</label>
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-text" id="medidorrp"><i class="dripicons-chevron-right"></i></span>
                                                            <input type="text" class="form-control" id="medidorr" placeholder="Medidor" aria-describedby="medidorrp" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-2">
                                                        <label class="form-label m-0" for="direccionr1">Direccion 1 Not.:</label>
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-text" id="direccionr1p"><i class="dripicons-chevron-right"></i></span>
                                                            <input type="text" class="form-control" id="direccionr1" placeholder="Direccion" aria-describedby="direccionr1p" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-2">
                                                        <label class="form-label m-0" for="direccionr2">Direccion 2 Not.:</label>
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-text" id="direccionr2p"><i class="dripicons-chevron-right"></i></span>
                                                            <input type="text" class="form-control" id="direccionr2" placeholder="Direccion" aria-describedby="direccionr2p" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-2">
                                                        <label class="form-label m-0" for="postalr">Codigo postal:</label>
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-text" id="postalrp"><i class="dripicons-chevron-right"></i></span>
                                                            <input type="text" class="form-control" id="postalr" placeholder="Codigo postal" aria-describedby="postalrp" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-2">
                                                        <label class="form-label m-0" for="telefonor">Telefono/Celular:</label>
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-text" id="telefonorp"><i class="dripicons-chevron-right"></i></span>
                                                            <input type="text" class="form-control" id="telefonor" placeholder="Numero" aria-describedby="telefonorp" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-2">
                                                        <label class="form-label m-0" for="correor">Correo Elect.:</label>
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-text" id="correorp"><i class="dripicons-chevron-right"></i></span>
                                                            <input type="text" class="form-control" id="correor" placeholder="Email" aria-describedby="correorp" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="basictab3">
                                                <div class="row">
                                                    <div class="col-lg-4 mb-2">
                                                        <label class="form-label m-0" for="codigor">Codigo:</label>
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-text" id="codigorp"><i class="dripicons-chevron-right"></i></span>
                                                            <input type="text" class="form-control" id="codigor" placeholder="Codigo" aria-describedby="codigorp" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 mb-2">
                                                        <label class="form-label m-0" for="descripcionr">Descripcion:</label>
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-text" id="descripcionrp"><i class="dripicons-chevron-right"></i></span>
                                                            <input type="text" class="form-control" id="descripcionr" placeholder="Descripcion" aria-describedby="descripcionrp" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 mb-2">
                                                        <label class="form-label m-0" for="serier">Nª Serie:</label>
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-text" id="resierp"><i class="dripicons-chevron-right"></i></span>
                                                            <input type="text" class="form-control" id="serier" placeholder="Serie" aria-describedby="resierp" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 mb-2">
                                                        <label class="form-label m-0" for="recibor">Nª Recibo:</label>
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-text" id="reciborp"><i class="dripicons-chevron-right"></i></span>
                                                            <input type="text" class="form-control" id="recibor" placeholder="Recibo" aria-describedby="reciborp" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 mb-2">
                                                        <label class="form-label m-0" for="fer">Fecha Emision:</label>
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-text" id="ferp"><i class="dripicons-chevron-right"></i></span>
                                                            <input type="text" class="form-control" id="fer" placeholder="Fecha" aria-describedby="ferp" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 mb-2">
                                                        <label class="form-label m-0" for="importer">Importe:</label>
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-text" id="importerp"><i class="dripicons-chevron-right"></i></span>
                                                            <input type="text" class="form-control" id="importer" placeholder="Importe" aria-describedby="importerp" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 mb-2">
                                                        <h5 class="m-0">Fundamento del reclamo:</h5>
                                                        <div class="form-floating">
                                                            <textarea class="form-control" placeholder="Leave a comment here" id="fundamentor" style="height: 100px"></textarea>
                                                            <label for="fundamentor">Fundamento del reclamo</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12" style="display: none;">
                                                        <div class="text-center">
                                                            <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                                                            <h3 class="mt-0">Thank you !</h3>

                                                            <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam
                                                                mattis dictum aliquet.</p>

                                                            <div class="mb-3">
                                                                <div class="form-check d-inline-block">
                                                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                    <label class="form-check-label" for="customCheck1">I agree with the Terms and Conditions</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="basictab4">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h6 class="font-15 mt-3">La EPS entrega cartilla informativa:</h6>
                                                        <div class="mt-2">
                                                            <div class="form-check form-check-inline">
                                                                <input type="radio" id="customRadio3" name="customRadio1" class="form-check-input">
                                                                <label class="form-check-label" for="customRadio3">SI</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input type="radio" id="customRadio4" name="customRadio1" class="form-check-input">
                                                                <label class="form-check-label" for="customRadio4">NO</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-2 mt-2">
                                                        <label for="example-fileinput" class="form-label m-0">Copia de dni:</label>
                                                        <input type="file" id="example-fileinput" class="form-control">
                                                    </div>
                                                    <div class="col-lg-6 mb-2 mt-2">
                                                        <label for="example-fileinput" class="form-label m-0">Copia de recibo:</label>
                                                        <input type="file" id="example-fileinput" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="basictab5">
                                                <div class="row mb-3">
                                                    <label for="fecha1f" class="col-6 col-form-label">Inspeccion interna y externa</label>
                                                    <label for="fecha1f" class="col-1 col-form-label" style="font-size: .8rem;">Fecha</label>
                                                    <div class="col-5">
                                                        <input type="email" class="form-control form-control-sm" id="fecha1f" placeholder="Fecha">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="fecha2f" class="col-3 col-form-label">Citacion a reunion</label>
                                                    <label for="fecha2f" class="col-1 col-form-label" style="font-size: .8rem;">Fecha</label>
                                                    <div class="col-3">
                                                        <input type="email" class="form-control form-control-sm" id="fecha2f" placeholder="Fecha">
                                                    </div>
                                                    <label for="hora1f" class="col-3 col-form-label">Hora (Rango de 2 horas)</label>
                                                    <div class="col-2">
                                                        <input type="email" class="form-control form-control-sm" id="hora1f" placeholder="Fecha">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="fecha3f" class="col-3 col-form-label">Fecha maxima de notificacion de la resolucion</label>
                                                    <label for="fecha3f" class="col-1 col-form-label" style="font-size: .8rem;">Fecha</label>
                                                    <div class="col-3">
                                                        <input type="email" class="form-control form-control-sm" id="fecha3f" placeholder="Fecha">
                                                    </div>
                                                    <label for="hora2f" class="col-3 col-form-label">Hora</label>
                                                    <div class="col-2">
                                                        <input type="email" class="form-control form-control-sm" id="hora2f" placeholder="Fecha">
                                                    </div>
                                                </div>
                                            </div>

                                            <ul class="list-inline wizard mb-0 mt-3">
                                                <li class="previous list-inline-item disabled">
                                                    <a href="#" class="btn btn-info btn-sm">Anterior</a>
                                                </li>
                                                <li class="next list-inline-item float-end">
                                                    <a href="#" class="btn btn-info btn-sm">Siguiente</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer py-0">
                <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-sm btn-success guardar">Guardar</button>
            </div>
        </div>
    </div>
</div>
<script>
// var tablaDeRegistros;
var flip=0;
$(document).ready( function () {
    // tablaDeRegistros=$('.contenedorRegistros').html();
    // fillRegistros();
    // $('.overlayPagina').css("display","none");
} );
$('.guardar').on('click',function(){
    guardar();
});
function data(tipo)
{
    let segunAccion=tipo?'':'e';
    return {
        clientec:$('#clientec').val(),
        dnic:$('#dnic').val(),
        rucc:$('#rucc').val(),
        direccionc:$('#direccionc').val(),
        urbanizacionc:$('#urbanizacionc').val(),
        provinciac:$('#provinciac').val(),
        distritoc:$('#distritoc').val(),
        telefonoc:$('#telefonoc').val(),

        // tipoDoc:$('#'+segunAccion+'tipoDoc').val(),
        // doc:$('#'+segunAccion+'doc').val(),
        // ruc:$('#'+segunAccion+'ruc').val(),
        // nombre:$('#'+segunAccion+'nombre').val(),
        // apellido:$('#'+segunAccion+'apellido').val(),
        // celular:$('#'+segunAccion+'celular').val(),
        // correo:$('#'+segunAccion+'correo').val(),
        // domicilio:$('#'+segunAccion+'domicilio').val(),
        // fechaNacimiento:$('#'+segunAccion+'fechaNacimiento').val(),

        // idCargo:$('#'+segunAccion+'cargo').val(),
    }
}
function guardar()
{
    if($('#formValidateReg').valid()==false)
    {
        return;
    }
    jQuery.ajax(
    { 
        url: "{{url('solicitud/registrar')}}",
        data: data(true),
        method: 'get',
        success: function(result){
            console.log(result);
            // $( ".overlayRegistros" ).toggle( flip++ % 2 === 0 );
            // construirTabla();
            // fillRegistros();
            // limpiarForm();
            $('#modalRegistrar').modal('hide');
            msjRee(result);
        }
    });
}
</script>