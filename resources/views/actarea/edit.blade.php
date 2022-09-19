@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">EDITAR RAZA</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="form" action="{{ url('nivel/actualizar/'.$nivel->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12">
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label>Nombre
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" placeholder="Ingrese nombre"
                                                        name="nombre" id="nombre" value="{{$nivel->nombre}}" autofocus />
                                                    {{-- @error('nombre')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror --}}
                                                </div>
                                               
                                                <div class="form-group col-6">
                                                    <label>Tipo Especie<span class="text-danger">*</span></label>
                                                    <select class="form-control select2" name="materia_id" id="materia_id"
                                                        >                                                     
                                                        @foreach ($materia as $materias)
                                                            <option value="{{ $materias->id }}" {{($materias->nombre == $nivel->materia->nombre)? 'selected' : ''}}>{{ $materias->nombre }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                
                                {{-- <div class="card-header d-flex flex-wrap py-2 mr-3 p-0">
                                    <button id="btnAgregar" type="submit" class="btn btn-primary mr-2 font-weight-bolder">Guardar</button>
                                    <a id="btnCancelar" class="btn btn-secondary">Cancelar</a>
                                </div> --}}
                                {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Guardar</button> --}}
                                {{-- <input type="hidden" class="form-control" name="razaid" id="razaid" value="{{ old('razaid') }}"
                                    autofocus /> --}}

                                    <a href="{{url('nivel')}}" type="button" class="btn btn-secondary" >Atras</a>
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection