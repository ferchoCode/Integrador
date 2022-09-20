@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1 class="page__headin">AREA</h1>
        </div>
        {{-- <div class="row">
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
        </div> --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h2 class="text-center"></h2>
                            <button class="btn btn-primary">Nuevo</button>
                        </div>
                       
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-6">
                            </div>
                            <div class="col-6">
                                <div id="reporte">
                                    @include('reporte.tabla')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
