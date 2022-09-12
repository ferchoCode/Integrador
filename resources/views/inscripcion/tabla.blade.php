<div class="table-responsive">
    <table class="table hover rounded table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>ALUMNO</th>
            {{-- <th>MATERIA</th> --}}
            <th>NIVEL</th>


      
            
            <th style="width: 150px; align-content: center;" >ACCIÓN</th>
        </tr>
        </thead>
        <tbody>
        @foreach($inscripcion as $inscripciones)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$inscripciones->alumno->nombre}} {{$inscripciones->alumno->apellido}}</td>
                {{-- <td>{{$inscripciones->materia->nombre}}</td> --}}
                <td>{{$inscripciones->nivel->nombre}}</td>

            
                <td>
                    <form id="eliminar{{$inscripciones->id}}"
                          action="{{ url('inscripcion/delete/' . $inscripciones->id) }}"
                          method="POST">
                        @csrf
                        {{-- @can('editar_tipo_alquiler') --}}
                        {{-- <a onclick="formEdit({{$clientes}})"
                           class="btn  btn-icon btn-warning btn-sm mr-2">
                           <i class="fa-solid fa-pen-to-square"></i>
                        </a> --}}
                        <a  href="{{ url('inscripcion/'.$inscripciones->id.'/edit') }}"  class="btn  btn-icon btn-warning btn-sm mr-2">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        {{-- @endcan
                        @can('eliminar_tipo_alquiler') --}}
                        <button type="button" onclick="confirmEliminar({{ $inscripciones->id }})"
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
