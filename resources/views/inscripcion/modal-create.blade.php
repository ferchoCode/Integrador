<div class="modal fade" id="crear_nivel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">REGISTRAR INSCRIPCION</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="form" action="{{ url('inscripcion') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="form-group col-12">
                                    <label>Alumno<span class="text-danger">*</span></label>
                                    <select class="form-control select2" name="alumno_id" id="alumno_id"
                                        value="{{ old('alumno_id') }}">
                                        <option value="">Seleccione Alumno</option>

                                        @foreach ($alumno as $alumnos)
                                            <option value="{{ $alumnos->id }}">{{ $alumnos->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="form-group col-12">
                                    <label>Materia<span class="text-danger">*</span></label>
                                    <select class="form-control select2" name="materia_id" id="tipo_materia" onchange="selecMateria()">
                                        <option value="">Seleccione Materia</option>

                                        @foreach ($materia as $materias)
                                            <option  value="{{ $materias->id }}">{{ $materias->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-12">
                                    <label>Nivel<span class="text-danger">*</span></label>
                                    <select class="form-control select2" id="tipo_nivel" name="nivel_id"
                                    value="{{old('nivel_id')}}">
                                    <option value="">Seleccione Nivel</option>
                                    {{-- <option value="">Seleccione Raza</option> --}}
                                            {{-- @foreach($raza as $razas)
                                        <option
                                                value="{{ $razas->id }}">{{ $razas->nombre }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>

                            </div>
                        </div>
                        {{-- <div class="card-header d-flex flex-wrap py-2 mr-3 p-0">
                    <button id="btnAgregar" type="submit" class="btn btn-primary mr-2 font-weight-bolder">Guardar</button>
                    <a id="btnCancelar" class="btn btn-secondary">Cancelar</a>
                </div> --}}

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
            </form>
        </div>
    </div>
</div>
