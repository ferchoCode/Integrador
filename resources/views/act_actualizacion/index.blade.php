@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/vistas/tabla.css') }}">
@endsection
@section('content')
    <section class="section">
        <div class="section-header mb-4">
            <h1 class="page__heading">Actualizacion de Activo</h1>
        </div>
        <div class="section-body">
          
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div>
                                <h1>{{$activo->codigo_activo}}</h1>
                                <h1 class="fs-1">{{strtoupper($activo->nombre_activo)}}</h1>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-3">
                                    <div class="actualizar">
                                        @include('act_actualizacion.actualizar')
                                    </div>
                                </div>
                         
                                <div class="col-9 d-flex justify-content-center align-items-start">
                                    <div class="tabla">
                                        @include('act_actualizacion.tabla')
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

        $(document).on('click', '#tipo_especie', function() {
            let id = $(this).val();
            console.log(id);
            $.ajax({
                type: "GET",
                url: "mascota/buscaraza/" + id,
                data: {
                    id: id,
                },
                success: function(response) {
                    // console.log(response);
                    var html_select = '<option value="">Seleccione Raza</option>';
                    for (var i = 0; i < response.length; i++)
                        // console.log(response[i].nombre);
                        html_select += '<option value=" ' + response[i].id + ' ">' + response[i]
                        .nombre + '</option>';
                    $('#tipo_raza').html(html_select);
                    console.log(html_select);

                    // $.each(response, function(nombre,id){
                    //     $.('#tipo_raza').append("<option value='"+ id "'>"+ value +"</option>")
                    // })
                    // $('#tabla').html(response);
                },
                error: function(xhr, ajaxOptions, thrownError) {}
            });
        })
    </script>
    <script>
        $(document).ready(function() {
            estado = 0;
            $("#btnNuevo").click(function() {
                if (estado == 0) {
                    $('#crear_nuevo').slideDown('fast');
                    $('#editar').slideUp('fast');
                }
                // $("#crear_nuevo").css("display", "none");
                // $("#mielemento").css("display", "block");
            });

            $('#btnCancelar').click(function() {
                $('#crear_nuevo').slideUp('fast');
                estado = 0;
            });
        });
    </script>

    <script>
        function getRaza(razas) {
            console.log(razas.especie.nombre);

            if (estado == 0) {
                $('#editar').slideDown('fast');
                $('#crear_nuevo').slideUp('fast');
            }
            $('#nombre').val(razas.nombre);
            $('#descripcion').val(razas.descripcion);

            // $('#especie_id').val(razas.especie_id);
            $('#especie_id').val(razas.especie_id.nombre);

            $('#razaid').val(razas.id);

            // console.log(id);
            // $.ajax({
            //         type: "GET",

            //         url: "raza/buscarespecie/" + id,
            //         data: {
            //             id: id,
            //         },
            //         success: function(response) {
            //             console.log(response)

            //         },
            //         error: function(err) {
            //             if (err.status ==
            //                 422
            //             ) { 
            //                 console.log(err.responseJSON);

            //                 $.each(err.responseJSON.errors, function(i, error) {
            //                     $("#form_Actualizar").append(error);
            //                 });
            //             }
            //         }
            //     });
        }

        $(function() {
            $('#formUpdate').submit(function(e) {
                e.preventDefault();
                var nombre = $('#nombre').val();
                var id = $('#razaid').val();

                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "especie/actualizar/" + id,
                    data: {
                        nombre: nombre,
                        id: id,
                    },
                    beforeSend: function() {},
                    success: function(response) {
                        console.log(response)
                        window.location.reload();
                        // $("#form_Actualizar")[0].reset();
                        // toastr.success('Registro actualizado', {
                        //   timeout: 9000
                        // });
                        // setTimeout(window.location = '/tipo-alquiler', 1000);
                        // console.log(response);

                    },
                    error: function(err) {
                        if (err.status ==
                            422
                        ) { // cuando el codigo de status es 422 significa error de validacion 
                            console.log(err.responseJSON);
                            // mostrando errores del campo conrrespondiente
                            $.each(err.responseJSON.errors, function(i, error) {
                                $("#form_Actualizar").append(error);

                                // $("#errornombre").html(error);
                                // $("#errordescripcion").html(error);
                            });
                        }
                    }
                });
            });
        });
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
@endsection
