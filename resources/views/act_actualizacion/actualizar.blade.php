<!--begin::Card-->
{{-- <div>{{dd($activo->id)}}</div> --}}
<form class="form" action="{{ url('act_actualizacion/actualizar/' . $activo->id) }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    <div class="card-body pb-0 pt-0">
        <div class="row">
            <div class="form-group col-autp">
                <label>Descripcion
                    <span class="text-danger">*</span></label>
                <textarea rows="4" cols="50" style="height: 150px" class="form-control" placeholder="Ingrese una descripcion"
                    name="descripcion" value="{{ old('descripcion') }}"></textarea>
            </div>

        </div>

    </div>
    <div class="card-footer pt-0">
        <button type="submit" class="btn btn-primary mr-2">Guardar</button>
        <a href="{{ url('act_fijo') }}" class="btn btn-secondary">Cancelar</a>
    </div>
</form>
