@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/vistas/tabla.css') }}">
@endsection
@section('content')
    <section class="section">
        <div class="section-header mb-4">
            <h1 class="page__heading">Cuotas</h1>
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
                                    @if (count($cuota) > 0)
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
                                                        {{-- <th style="width: 150px; align-content: center;">ACCIÓN</th> --}}
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($cuota as $cuotas)
                                                        <tr>
                                                            {{-- <th scope="row">{{$loop->iteration}}</th>s --}}
                                                            <td>{{ $cuotas->nombre }}</td>
                                                            <td>{{ $cuotas->monto_cancelar }}</td>
                                                            <td>{{ $cuotas->monto_capital }}</td>
                                                            <td>{{ $cuotas->estado_cuota }}</td>
                                                            <td>{{ $cuotas->fecha_vencimiento }}</td>
                                                            <td>{{ $cuotas->descripcion_cuota }}</td>

                                                            {{-- <td>
                                                                <form id="eliminar{{ $cuotas->id }}"
                                                                    action="{{ url('credito/delete/' . $cuotas->id) }}"
                                                                    method="POST">
                                                                    @csrf

                                                                    <a href="{{ url('credito/' . $cuotas->id . '/edit') }}"
                                                                        class="btn  btn-icon btn-warning btn-sm mr-2">
                                                                        <i class="fa-solid fa-pen-to-square"></i>Ver Cuotas
                                                                    </a>

                                                                    <button type="button" onclick="confirmEliminar({{ $creditos->id }})"
                                                                class="btn btn-icon  btn-danger btn-sm mr-2">
                                                                <i class="fa-solid fa-trash-can"></i>
                                                                     </button>
                                                                </form>
                                                            </td> --}}
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                {{-- <tfoot>
                                            <tr>
                                                <td colspan="9">
                                                    <div id="paging">
                                                        <ul>
                                                            <li><a href="#"><span>Previous</span></a></li>
                                                            <li><a href="#" class="active"><span>1</span></a></li>
                                                            <li><a href="#"><span>2</span></a></li>
                                                            <li><a href="#"><span>3</span></a></li>
                                                            <li><a href="#"><span>4</span></a></li>
                                                            <li><a href="#"><span>5</span></a></li>
                                                            <li><a href="#"><span>Next</span></a></li>
                                                        </ul>
                                                    </div>
                                            </tr>
                                        </tfoot> --}}
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
