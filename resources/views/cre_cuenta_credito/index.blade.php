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
                        
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-12 d-flex justify-content-center align-items-start">
                                    <div class="tabla">
                                        @include('cre_cuenta_credito.tabla')
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- @include('act_fijo.modal-create') --}}
    {{-- @include('nivel.modal-edit') --}}
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
        var tabla=document.getElementById("table").getElementsByTagName("thead")
        tabla.addEventListener("click", function(e) {
            console.log(this.id); // Con función normal el contexto es el enlace
            console.log(e.currentTarget); // También el enlace
            console.log(e.target); // No hay hijos, es el enlace
        }, false);
        var filas = document.getElementById("table").getElementsByTagName("tr");
        console.log(filas.target);
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
