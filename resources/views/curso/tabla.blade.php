<div class="table-responsive">
    <table class="table hover rounded table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>ALUMNO</th>
            <th>PROFESOR</th>
            <th>GRUPO</th>
            <th style="width: 150px; align-content: center;" >ACCIÓN</th>
        </tr>
        </thead>
        <tbody>
        @foreach($curso as $cursos)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$cursos->alumno->nombre}} {{$cursos->alumno->apellido}}</td>
                <td>{{$cursos->profesor->nombre}} {{$cursos->profesor->apellido}}</td>
                <td>{{$cursos->grupo->nombre}}</td>
               
                <td>
                    <form id="eliminar{{$cursos->id}}"
                          action="{{ url('curso/delete/' . $cursos->id) }}"
                          method="POST">
                        @csrf
                        {{-- @can('editar_tipo_alquiler') --}}
                        <a onclick="formEdit({{$cursos}})"
                           class="btn  btn-icon btn-warning btn-sm mr-2">
                           <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        {{-- @endcan
                        @can('eliminar_tipo_alquiler') --}}
                        <button type="button" onclick="confirmEliminar({{ $cursos->id }})"
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