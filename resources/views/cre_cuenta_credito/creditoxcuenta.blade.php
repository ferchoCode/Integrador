@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/vistas/tabla.css') }}">
@endsection
@section('content')
    <section class="section">
        <div class="section-header mb-4">
            <h1 class="page__heading">Cuenta Credito</h1>
        </div>
        <div class="section-body">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <div class="row ">
                               
                                <div class="col-12">
                                    @if (Session::has('error'))
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <i class="fa fa-times"></i>
                                            </button>
                                            <strong></strong> {{ session('error') }}
                                        </div>
                                    @endif
                                    @if (count($credito) > 0)
                                        <div class="datagrid">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>ClENTE</th>
                                                        <th>CI</th>
                                                        <th>FECHA SOLICITUD</th>
                                                        <th>MONTO CREDITO</th>
                                                        <th>PLAZO</th>
                                                        <th>ITERESES</th>
                                                        <th>MONTO MENSUAL</th>
                                                        <th>SALDO CREDITO</th>
                                                        <th>ESTADO CREDITO</th>
                                                        <th style="width: 150px; align-content: center;">ACCIÓN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($credito as $creditos)
                                                    <tr>
                                                        {{-- <th scope="row">{{$loop->iteration}}</th>s --}}
                                                        <td>{{ $creditos->nombre}} {{ $creditos->apellido}}</td>
                                                        <td>{{ $creditos->ci }}</td>
                                                        <td>{{ $creditos->fecha_solicitud }}</td>
                                                        <td>{{ $creditos->monto_credito }}</td>
                                                        <td>{{ $creditos->plazo_credito }}</td>
                                                        <td>{{ $creditos->interes_credito }}</td>
                                                        <td>{{ $creditos->monto_mensual }}</td>
                                                        <td>{{ $creditos->saldo_credito }}</td>
                                                        <td>{{ $creditos->estado_credito }}</td>
                                                        
                                                        <td>
                                                    <form id="eliminar{{$creditos->id}}"
                                                          action="{{ url('credito/delete/' . $creditos->id) }}"
                                                          method="POST">
                                                        @csrf
                                               
                                                        <a  href="{{ url('cuota/'.$creditos->id) }}"  class="btn  btn-icon btn-warning btn-sm mr-2">
                                                                Cuotas
                                                        </a>
                                             
                                                        {{-- <button type="button" onclick="confirmEliminar({{ $creditos->id }})"
                                                                class="btn btn-icon  btn-danger btn-sm mr-2">
                                                                <i class="fa-solid fa-trash-can"></i>
                                                        </button> --}}
                                                    </form>
                                                </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                    @else
                                        <div class="datagrid">

                                            <table>
                                                <thead>
                                                    <tr>
                                                        {{-- <th>#</th> --}}
                                                        <th>NOMBRE</th>
                                                        <th>MONTO CANCELAR</th>
                                                        <th>MONTO CAPITAL</th>
                                                        <th>ESTADO CUOTA</th>
                                                        <th>FECHA VENCIMIENTO</th>
                                                        <th>DESCRIPCION</th>

                                                        {{-- <th style="width: 150px; align-content: center;" >ACCIÓN</th> --}}
                                                    </tr>
                                                </thead>
                                            </table>
                                            <div class="alert alert-light  d-flex justify-content-center align-items-center"
                                                role="alert">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                                    </symbol>
                                                </svg>

                                                <svg class="bi flex-shrink-0 mr-2" width="24" height="24"
                                                    role="img" aria-label="Info:">
                                                    <use xlink:href="#info-fill" />
                                                </svg>
                                                <div class="alert-text">No hay datos.</div>
                                            </div>
                                        </div>
                                    @endif

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
