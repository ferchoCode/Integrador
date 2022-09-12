<div class="table-responsive">
    <table class="table hover rounded table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>DIRECCION</th>
            <th>TELEFONO</th>

            
            <th style="width: 150px; align-content: center;" >ACCIÓN</th>
        </tr>
        </thead>
        <tbody>
        @foreach($profesor as $profesores)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$profesores->nombre}}</td>
                <td>{{$profesores->apellido}}</td>
                <td>{{$profesores->direccion}}</td>
                <td>{{$profesores->telefono}}</td>

            
                <td>
                    <form id="eliminar{{$profesores->id}}"
                          action="{{ url('profesor/delete/' . $profesores->id) }}"
                          method="POST">
                        @csrf
                        {{-- @can('editar_tipo_alquiler') --}}
                        {{-- <a onclick="formEdit({{$clientes}})"
                           class="btn  btn-icon btn-warning btn-sm mr-2">
                           <i class="fa-solid fa-pen-to-square"></i>
                        </a> --}}
                        <a type="button" class="btn  btn-icon btn-warning btn-sm mr-2" data-toggle="modal" data-target="#edit_profesor" onclick="getProfesor({{$profesores}})">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        {{-- @endcan
                        @can('eliminar_tipo_alquiler') --}}
                        <button type="button" onclick="confirmEliminar({{ $profesores->id }})"
                                class="btn btn-danger btn-sm mr-2">
                                <i class="fa-solid fa-trash-can"></i>
                        </button>
                        {{-- @endcan --}}
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    
</div>
