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
                    {{-- <th>#</th> --}} 
                    <th>ClENTE</th>
                    <th>CI</th>
                    <th>FECHA SOLICITUD</th>
                    <th>MONTO CREDITO</th>
                    <th>PLAZO</th>
                    <th>ITERESES</th>
                    <th>MONTO MENSUAL</th>
                    <th>SALDO CREDITO</th>
                    <th>ESTADO CREDITO</th>
                    <th style="width: 150px; align-content: center;" >ACCIÓN</th>
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
                    <th>FECHA SOLICITUD</th>
                    <th>MONTO CREDITO</th>
                    <th>PLAZO</th>
                    <th>ITERESES</th>
                    <th>MONTO MENSUAL</th>
                    <th>SALDO CREDITO</th>
                    <th>ESTADO CREDITO</th>

                    {{-- <th style="width: 150px; align-content: center;" >ACCIÓN</th> --}}
                </tr>
            </thead>
        </table>
        <div class="alert alert-light  d-flex justify-content-center align-items-center" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                </symbol>
              </svg>
              
            <svg class="bi flex-shrink-0 mr-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
            <div class="alert-text">No hay datos.</div>
        </div>
    </div>
@endif
