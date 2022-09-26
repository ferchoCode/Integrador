@if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong></strong> {{ session('error') }}
    </div>
@endif
@if (count($cuentacredito) > 0)

    <div class="datagrid" id="table">
        <table>
            <thead>
                <tr>
                    {{-- <th>#</th> --}}
                    <th>CLIENTE</th>
                    <th>MONTO CREDITO</th>
                    <th>TIPO VENTA</th> {{-- TIPO CREDITO = D --}}
                    <th>DIAS PLAZO</th>
                    <th>FECHA</th>
                    <th>ESTADO</th>
                    <th>DESCRIPCION</th>
                    <th>CONCEPTO</th>
                    {{-- <th>OPCION</th> --}}



                    <th style="width: 150px; align-content: center;">ACCIÓN</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cuentacredito as $cuentacreditos)
                    <tr>
                        {{-- <th scope="row">{{$loop->iteration}}</th>s --}}
                        <td>{{ $cuentacreditos->nombre }} {{ $cuentacreditos->apellido }}</td>
                        <td>{{ $cuentacreditos->monto_credito }}</td>
                        <td><span class="badge bg-primary p-1 text-white">{{ $cuentacreditos->tipo_venta }}</span> </td>
                        <td>{{ $cuentacreditos->dias_plazo }}</td>
                        <td>{{ $cuentacreditos->fecha }}</td>
                        <td><span>{{ $cuentacreditos->estado }} </span>
                        </td>
                        <td>{{ $cuentacreditos->descripcion }}</td>
                        <td>{{ $cuentacreditos->concepto }}</td>


                        <td>
                            <form id="eliminar{{ $cuentacreditos->id }}"
                                action="{{ url('cre_cuenta_credito/delete/' . $cuentacreditos->id) }}" method="POST">
                                @csrf

                                @if (in_array($cuentacreditos->id, $verificarcredito))
                                    <a href="{{ url('cre_cuenta_credito/' . $cuentacreditos->id) }}"
                                        class="btn  btn-icon btn-primary btn-sm mr-2">
                                        Ver Credito
                                    </a>
                                @else
                                    <a href="{{ url('cre_cuenta_credito/' . $cuentacreditos->id . '/edit') }}"
                                        class="btn  btn-icon btn-success btn-sm mr-2">
                                        Crear Credito
                                    </a>
                                @endif



                                {{-- <button type="button" onclick="confirmEliminar({{ $cuentacreditos->id }})"
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
                    <th>#</th>
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
        </table>
        <div class="alert alert-light  d-flex justify-content-center align-items-center" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path
                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                </symbol>
            </svg>

            <svg class="bi flex-shrink-0 mr-2" width="24" height="24" role="img" aria-label="Info:">
                <use xlink:href="#info-fill" />
            </svg>
            <div class="alert-text">No hay datos.</div>
        </div>
    </div>
@endif
