@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong>Success !</strong> {{ session('success') }}
    </div>
@endif

<div class="table-responsive">
    <table class="table hover rounded table-bordered">
        <thead>
            <tr>
            {{-- <th>#</th> --}}
            <th>AREA</th>
            <th>CATEGORIA</th>
            <th>CODIGO</th>
            <th>NOMBRE</th>
            <th>FECHA INGRESO</th>
            <th>FECHA SALIDA</th>
            <th>ESTADO</th>
           
            <th style="width: 150px; align-content: center;" >ACCIÓN</th>
        </tr>
        </thead>
        <tbody>
        @foreach($activo as $activos)
            <tr>
                {{-- <th scope="row">{{$loop->iteration}}</th>s --}}
                <td>{{$activos->area->nombre_area_activo}}</td>
                <td>{{$activos->categoria->nombre_categoria_activo}}</td>
                <td>{{$activos->codigo_activo}}</td>
                <td>{{$activos->nombre_activo}}</td>
                <td>{{$activos->fecha_ingreso_activo}}</td>
                <td>{{$activos->fecha_salida_activo}}</td>
                <td>{{$activos->estado_activo}}</td>
                <td>
                    <form id="eliminar{{$activos->id}}"
                          action="{{ url('act_fijo/delete/' . $activos->id) }}"
                          method="POST">
                        @csrf
               
                        <a  href="{{ url('act_fijo/'.$activos->id.'/edit') }}"  class="btn  btn-icon btn-warning btn-sm mr-2">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
             
                        <button type="button" onclick="confirmEliminar({{ $activos->id }})"
                                class="btn btn-icon  btn-danger btn-sm mr-2">
                                <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    
</div>
