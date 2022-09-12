{{-- <p>{{ dd($curso) }}</p> --}}
<div class="table-responsive">
    <table class="table hover rounded table-bordered"  id="mytable" >
        <thead>
            <tr>
                <th>#</th>
                <th>ALUMNO</th>
                <th>MATERIA</th>
                <th>NIVEL</th>
                <th>GRUPO</th>
            </tr>
        </thead>
        <tbody id="detalles">
            @foreach ($curso as $cursos)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $cursos->nombre }} {{ $cursos->apellido }}</td>
                <td>{{ $cursos->materia }}</td>
                <td>{{ $cursos->nivel }}</td>

                @if ($cursos->grupo == null)
                    <td>Sin grupo</td>
                @else
                     <td>{{ $cursos->grupo->nombre }}</td>
                @endif
            </tr>
            @endforeach
            {{-- @for ($i = 0; $i < count($curso); $i++)
                <tr>
                    <th scope="row">{{ $i }}</th>
                    <td>{{ $curso[$i]->nombre }} {{ $curso[$i]->apellido }}</td>
                    <td>{{ $curso[$i]->materia }}</td>
                    <td>{{ $curso[$i]->nivel }}</td>

                    @if ($curso[$i]->grupo == null)
                        <td>Sin grupo</td>
                    @else
                         <td>{{ $curso[$i]->grupo->nombre }}</td>
                    @endif
                </tr>
            @endfor --}}
            {{-- @foreach ($curso as $cursos)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $cursos->nombre }} {{ $cursos->apellido }}</td>
                    <td>{{ $cursos->materia }}</td>
                    <td>{{ $cursos->nivel }}</td>
                    <td>{{ $cursos->grupo->nombre }}</td>
                </tr>
            @endforeach --}}



        </tbody>
    </table>

</div>
