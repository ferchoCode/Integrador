@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/vistas/tabla.css') }}">
@endsection
@section('content')
    <section class="section">
        <div class="section-header mb-4">
            <h1 class="page__heading">Cuentas por Cobrar a Credito</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <label style="font-size: 25px">{{ $cuenta[0]->nombre }} {{ $cuenta[0]->apellido }}</label>
                        </div>

                        <div class="card-body">
                            <div class="row ">
                                <form class="form" action="{{ url('cre_cuenta_credito') }}" id="ingreso-datos-credito"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body pb-0 pt-0">
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <div class="row">
                                                    <div class="form-group col-6">
                                                        <label>Fecha Ingreso solicitud
                                                            <span class="text-danger">*</span></label>

                                                        <input type="text" class="form-control" id="datepicker"
                                                            placeholder="Ingrese fecha de solicitud" name="fecha_solicitud"
                                                            autocomplete="off"
                                                            value="{{ old('fecha_solicitud') }}"autofocus />
                                                        @error('fecha_solicitud')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    {{-- INPUT DE PRUEBA --}}
                                                    <div class="form-group col-6">
                                                        <label>Monto Credito
                                                            <span class="text-danger">*</span></label>
                                                        <input type="number" step="0.01" class="form-control"
                                                            placeholder="Ingrese el motno"
                                                            id='monto'onkeyup="calcularMontoMensual()" readonly
                                                            name="monto" value="{{ $cuenta[0]->monto_credito }}"
                                                            autofocus />
                                                        @error('monto')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label>Numero de Meses Plazo Credito
                                                            <span class="text-danger">*</span></label>
                                                        <input type="number" min="1" max="99999999999999" class="form-control"
                                                            placeholder="Ingrese el plazo" id='plazo'
                                                            onkeyup="calcularMontoMensual()" name="plazo"
                                                            value="{{ old('plazo') }}" autofocus />
                                                        @error('plazo')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label>Taza de Interes
                                                            <span class="text-danger">*</span></label>
                                                        <input type="number" min="1" max="20"
                                                            class="form-control" placeholder="Ingrese el plazo"
                                                            id='interes' onkeyup="calcularMontoMensual()" name="interes"
                                                            value="{{ old('interes') }}" autofocus />
                                                        @error('interes')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <input type="number" step="any" class="form-control"
                                                        name="cuota_mesual" id="cuota_mensual"
                                                        value="{{ old('cuota_mesual') }}" autofocus  hidden/>
                                                  
                                                    <input type="number" class="form-control" name="id_venta"
                                                        value="{{ $cuenta[0]->id }}" autofocus hidden />

                                                </div>

                                            </div>

                                            <div class="form-group col-6 mb-0">
                                                @if (Session::has('error'))
                                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong></strong> {{ session('error') }}
                                                    </div>
                                                @endif

                                                <div class="card" style="background-color: #7d8bf2">
                                                    <div class="card-body">
                                                        <div class="text-center text-white">
                                                            <h1>Cuota Mensual</h1>
                                                            <h1>$<label id="monto_mensual" class="ml-1 mr-1"
                                                                    style="font-size: 40px">0.0</label>USD</h1>
                                                            <hr>
                                                        </div>
                                                        <div class="text-center text-white mt-1">
                                                            <h3>Su credito solicitado es de $<label id="monto_credito"
                                                                    class="ml-1 mr-1">0.0</label>USD
                                                            </h3>
                                                        </div>

                                                        <div class="card p-3 mt-3" style="background-color: #b4b4b4">
                                                            <div class="d-flex justify-content-between text-white">
                                                                <p>Iva</p>
                                                                <span><label id="iva"
                                                                        class="ml-1 mr-1">0</label>%</span>
                                                            </div>
                                                            <hr>
                                                            <div class="d-flex justify-content-between text-white">
                                                                <p>Tasa de interes mensual</p>
                                                                <span><label id="interes_credito"
                                                                        class="ml-1 mr-1">0</label>%</span>
                                                            </div>
                                                            <hr>
                                                            <div class="d-flex justify-content-between text-white">
                                                                <p>Plazo</p>
                                                                <span><label id="plazo_credito"
                                                                        class="ml-1 mr-1">0</label>meses</span>
                                                            </div>
                                                            <hr>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="d-flex d-flex justify-content-center">
                    <button type="button" class="btn btn-primary" onclick="calcularMontoMensual()">Calcular</button>
                    <button type="button" class="btn btn-primary" onclick="LimpiezaDatos()">limpiar</button>

                </div> --}}
                                                <div class="card-footer pt-0 d-flex justify-content-center">
                                                    {{-- <button type="button" class="btn btn-primary" onclick="calcularMontoMensual()">Calcular</button> --}}
                                                    <button type="button" class="btn btn-warning"
                                                        onclick="LimpiezaDatos()">limpiar</button>
                                                    <button type="submit" class="btn btn-success ml-2">Asignar Nuevo
                                                        credito</button>
                                                    {{-- <a href="{{ url('act_fijo') }}" class="btn btn-secondary">Cancelar</a> --}}
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(function() {
            $('#datepicker').datepicker();
        });

        $(document).ready(function() {
            $('#select2_categoria').select2({
                // minimumResultsForSearch: Infinity
                dropdownParent: $("#crear")
            });
            // $('#select2_categoria').val('1').trigger('change.select2');

            $('#select2_area').select2({
                // minimumResultsForSearch: Infinity
                dropdownParent: $("#crear")
            });

            $('#crear').on('hidden.bs.modal', function() {
                $(this).removeData('bs.modal');
            });

        });
    </script>

    <script>
        function calcularMontoMensual() {
            var plazo = document.getElementById('plazo').value;
            var monto_credito = document.getElementById('monto').value;
            var interes = document.getElementById('interes').value;
            var iva = 13
            plazo = (isNaN(parseFloat(plazo))) ? 0 : parseFloat(plazo);
            monto_credito = (isNaN(parseFloat(monto_credito))) ? 0 : parseFloat(monto_credito);
            interes = (isNaN(parseFloat(interes))) ? 0 : parseFloat(interes);

            if (monto_credito <= 0 | plazo <= 0 | interes <= 0 | monto_credito == "" | plazo == "" | interes == "") {
                calcularCuotaMensual = 0.00;
            } else {

                calcularCuotaMensual = parseFloat((monto_credito / plazo + (monto_credito / plazo) * interes / 100)) * .13 +
                    parseFloat((monto_credito / plazo + (monto_credito / plazo) * interes / 100));
            }
            calcularCuotaMensual = (isNaN(parseFloat(calcularCuotaMensual))) ? 0 : parseFloat(calcularCuotaMensual);

            document.getElementById('monto_mensual').innerHTML = calcularCuotaMensual.toFixed(2);
            document.getElementById('cuota_mensual').value = calcularCuotaMensual.toFixed(2);

            document.getElementById('monto_credito').innerHTML = monto_credito;
            document.getElementById('iva').innerHTML = iva;
            document.getElementById('interes_credito').innerHTML = interes;
            document.getElementById('plazo_credito').innerHTML = plazo;
        }

        function LimpiezaDatos() {
            // VARIABLES GLOBALES
            calcularCuotaMensual = 0;
            plazo = 0;
            interes = 0;
            monto_credito = 0;
            iva = 0;
            // FORMULARIO DE CREDITOS
            document.getElementById("ingreso-datos-credito").reset();

            document.getElementById('monto_mensual').innerHTML = calcularCuotaMensual.toFixed(2);
            document.getElementById('monto_credito').innerHTML = monto_credito;
            document.getElementById('iva').innerHTML = iva;
            document.getElementById('interes_credito').innerHTML = interes
            document.getElementById('plazo_credito').innerHTML = plazo
        }
    </script>

    <script>
        function confirmEliminar(id) {
            //eliminar(id);
            console.log(id);
            Swal.fire({
                title: 'Esta seguro de eliminar este Registro ??',
                text: "Si Confirma la accion no podra recuperar los datos !!",
                //icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#187DE4',
                cancelButtonColor: '#F64E60',
                confirmButtonText: 'Si, Eliminar !'
            }).then((result) => {

                if (result.value) {
                    //form.submit();
                    $("#eliminar" + id).submit()
                }
            })
        }
    </script>
    <script>
        // function calcularMontoMensual() {
        //     var plazo = $('#plazo').val();
        //     var interes = $('#interes').val();
        //     var monto = $('#monto').val();

        //     $.ajax({
        //         type: "GET",
        //         url: "calcularMontoMensual",
        //         data: {
        //             plazo: plazo,
        //             interes: interes,
        //             monto: monto,
        //         },
        //         success: function(response) {
        //             console.log(response)

        //                 $('#interes_credito').text(response.interes);
        //                 $('#monto_mensual').text(response.monto_mensual);
        //                 $('#monto_credito').text(response.monto_credito);
        //                 $('#plazo_credito').text(response.plazo);
        //                 $('#iva').text(response.iva);

        //             // window.location.reload();
        //         },
        //         error: function(xhr, ajaxOptions, thrownError) {}
        //     });
        // }
    </script>
@endsection
