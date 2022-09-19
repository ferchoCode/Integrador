@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Reportes</h3>

        </div>
        <div class="row">
            <div class="form-group col-xl-6 col-md-6" hidden>
                <div class="input-group">
                    <input  id="search" type="text" class="form-control" 
                        placeholder="Texto a buscar..." />
                    <div class="input-group-append">
                        
                    </div>
                </div>
                <div class="input-group">
                </div>
            </div>

            {{-- <div class="form-group col-xl-3 col-md-3s">

                <select class="form-control" id="grupos">
                    <option value="">Buscar por Grupos</option>
                    @foreach ($grupo as $grupos)
                        <option value="{{ $grupos->nombre }}">{{ $grupos->nombre }}</option>
                    @endforeach

                </select>
            </div> --}}

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Lista de Alumnos</h3>
                    </div>
                </div>
            </div>
        </div>
        <div id="reporte">
            @include('reporte.tabla')
        </div>
    </section>
@endsection
@section('scripts')
   
    <script>
        // Write on keyup event of keyword input element
        $(document).on('change', '#grupos', function(event) {
            // let text = $("#grupos option:selected").text();
            // let search =  $('#search').val(text);
            let text = $(this).val();
            let search =  $('#search').val(text);
            console.log(text);
            // Show only matching TR, hide rest of them
            $.each($("#mytable tbody tr"), function() {
                if ($(this).text().toLowerCase().indexOf($(search).val().toLowerCase()) === -1)
                    $(this).hide();
                else
                    $(this).show();
            });
        });
    </script>
@endsection
