<div class="table-responsive">
    <table class="table hover rounded table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>DIRECCION</th>
            <th>TELEFONO</th>
            <th>FECHA NACIMIENTO</th>

            
            <th style="width: 150px; align-content: center;" >ACCIÓN</th>
        </tr>
        </thead>
        <tbody>
        @foreach($alumno as $alumnos)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$alumnos->nombre}}</td>
                <td>{{$alumnos->apellido}}</td>
                <td>{{$alumnos->direccion}}</td>
                <td>{{$alumnos->telefono}}</td>
                <td>{{$alumnos->fecha_nacimiento}}</td>

            
                <td>
                    <form id="eliminar{{$alumnos->id}}"
                          action="{{ url('alumno/delete/' . $alumnos->id) }}"
                          method="POST">
                        @csrf
                        {{-- @can('editar_tipo_alquiler') --}}
                        {{-- <a onclick="formEdit({{$clientes}})"
                           class="btn  btn-icon btn-warning btn-sm mr-2">
                           <i class="fa-solid fa-pen-to-square"></i>
                        </a> --}}
                        <a type="button" class="btn  btn-icon btn-warning btn-sm mr-2" data-toggle="modal" data-target="#edit_alumno" onclick="getAlumno({{$alumnos}})">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        {{-- @endcan
                        @can('eliminar_tipo_alquiler') --}}
                        <button type="button" onclick="confirmEliminar({{ $alumnos->id }})"
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
