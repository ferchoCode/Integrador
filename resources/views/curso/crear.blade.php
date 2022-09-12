<!--begin::Card-->
@extends('layouts.app')

@section('content')
    <section class="section">

        <div class="section-header">
            <h3 class="page__heading">Crear Nuevo Cursos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <form class="form" action="{{ url('curso') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="form-group col-12">
                                                <label>Materia<span class="text-danger">*</span></label>
                                                <select class="form-control select2"  id="tipo_materia"
                                                    >
                                                    <option value="">Seleccione Materia</option>


                                                    @foreach ($materia as $materias)
                                                        <option value="{{ $materias->id }}">{{ $materias->nombre }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group col-12">
                                                <label>Nivel<span class="text-danger">*</span></label>
                                                <select class="form-control select2" id="tipo_nivel"
                                                   >
                                                    <option value="">Seleccione Nivel</option>

                                                </select>
                                            </div>
                                            <div class="form-group col-12">
                                                <label>Alumno<span class="text-danger">*</span></label>
                                                <select class="form-control select2" id="nivel_alumno" name="alumno_id"
                                                    value="{{ old('alumno_id') }}">
                                                    <option value="">Seleccione Alumno</option>

                                                </select>
                                            </div>
                                            <div class="form-group col-12">
                                                <label>Profesor<span class="text-danger">*</span></label>
                                                <select class="form-control select2" name="profesor_id"
                                                    value="{{ old('profesor_id') }}">
                                                    <option value="">Seleccione Profesor</option>
                                                    @foreach ($profesor as $profesores)
                                                        <option value="{{ $profesores->id }}">{{ $profesores->nombre }}
                                                            {{ $profesores->apellido }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-12">
                                                <label>Grupo<span class="text-danger">*</span></label>
                                                <select class="form-control select2" name="grupo_id"
                                                    value="{{ old('nivel_id') }}">
                                                    <option value="">Seleccione Grupo</option>
                                                    @foreach ($grupo as $grupos)
                                                        <option value="{{ $grupos->id }}">{{ $grupos->nombre }}</option>
                                                    @endforeach
                                                </select>
                                            </div>




                                        </div>
                                    </div>
                                </div>
                                <div class="card-header d-flex flex-wrap py-2 mr-3 p-0">
                                    <button id="btnAgregar" type="submit"
                                        class="btn btn-primary mr-2 font-weight-bolder">Guardar</button>
                                    <a id="btnCancelar" class="btn btn-secondary">Cancelar</a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        $(document).on('click', '#tipo_materia', function() {
            let id = $(this).val();
            console.log(id);
            $.ajax({
                type: "GET",
                url: "buscarmateria/" + id,
                data: {
                    id: id,
                },
                success: function(response) {
                    // console.log(response);
                    var html_select = '<option value="" hidden>Seleccione Nivel</option>';
                    for (var i = 0; i < response.length; i++)
                        // console.log(response[i].nombre);
                        html_select += '<option value=" ' + response[i].id + ' ">' + response[i]
                        .nombre + '</option>';
                    $('#tipo_nivel').html(html_select);
                    // console.log(html_select);

                    // $.each(response, function(nombre,id){
                    //     $.('#tipo_raza').append("<option value='"+ id "'>"+ value +"</option>")
                    // })
                    // $('#tabla').html(response);
                },
                error: function(xhr, ajaxOptions, thrownError) {}
            });
        })

        $(document).on('click', '#tipo_nivel', function() {
            let id = $(this).val();
            console.log(id);
            $.ajax({
                type: "GET",
                url: "buscaralumno/" + id,
                data: {
                    id: id,
                },
                success: function(response) {
                    console.log(response);
                    var html_select = '<option value="" hidden>Seleccione Alumno</option>';
                    for (var i = 0; i < response.length; i++)
                        // console.log(response[i].nombre);
                        html_select += '<option value=" ' + response[i].id + ' ">' + response[i]
                        .nombre + ' ' + response[i].apellido + '</option>';
                    $('#nivel_alumno').html(html_select);
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
@endsection
