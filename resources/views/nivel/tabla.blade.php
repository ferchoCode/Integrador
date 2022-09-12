<div class="table-responsive">
    <table class="table hover rounded table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>NOMBRE</th>
            <th>MATERIA</th>

      
            
            <th style="width: 150px; align-content: center;" >ACCIÓN</th>
        </tr>
        </thead>
        <tbody>
        @foreach($nivel as $niveles)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$niveles->nombre}}</td>
                <td>{{$niveles->materia->nombre}}</td>
            
                <td>
                    <form id="eliminar{{$niveles->id}}"
                          action="{{ url('nivel/delete/' . $niveles->id) }}"
                          method="POST">
                        @csrf
                        {{-- @can('editar_tipo_alquiler') --}}
                        {{-- <a onclick="formEdit({{$clientes}})"
                           class="btn  btn-icon btn-warning btn-sm mr-2">
                           <i class="fa-solid fa-pen-to-square"></i>
                        </a> --}}
                        <a  href="{{ url('nivel/'.$niveles->id.'/edit') }}"  class="btn  btn-icon btn-warning btn-sm mr-2">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        {{-- @endcan
                        @can('eliminar_tipo_alquiler') --}}
                        <button type="button" onclick="confirmEliminar({{ $niveles->id }})"
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
