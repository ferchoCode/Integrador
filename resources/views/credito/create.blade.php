@extends('layouts.app')


<form class="form" action="{{ url('credito') }}" id="ingreso-datos-credito" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body pb-0 pt-0">
        <div class="row">
            <div class="form-group col-6">
                <div class="row">
                    <div class="form-group col-6">
                        <label>Fecha Ingreso solicitud
                            <span class="text-danger">*</span></label>

                        <input type="text" class="form-control" id="datepicker"
                            placeholder="Ingrese fecha de solicitud" name="fecha_solicitud" autocomplete="off"
                            value="{{ old('fecha_solicitud') }}"autofocus />
                    </div>
                    {{-- INPUT DE PRUEBA --}}
                    <div class="form-group col-6">
                        <label>Monto Credito
                            <span class="text-danger">*</span></label>
                        <input type="number" step="0.01" class="form-control" placeholder="Ingrese el motno"
                            id='monto'onkeyup="calcularMontoMensual()" readonly name="monto"
                            value="{{ $cuenta[0]->monto_credito }}" autofocus />
                    </div>
                    <div class="form-group col-6">
                        <label>Numero de Meses Plazo Credito
                            <span class="text-danger">*</span></label>
                        <input type="number" step="any" class="form-control" placeholder="Ingrese el plazo"
                            id='plazo' onkeyup="calcularMontoMensual()" name="plazo" value="{{ old('monto') }}"
                            autofocus />
                    </div>
                    <div class="form-group col-6">
                        <label>Taza de Interes
                            <span class="text-danger">*</span></label>
                        <input type="number" min="1" max="20" class="form-control"
                            placeholder="Ingrese el plazo" id='interes' onkeyup="calcularMontoMensual()"
                            name="interes" value="{{ old('monto') }}" autofocus />
                    </div>

                    <input type="number" step="any" class="form-control"
                    name="cuota_mesual" id="cuota_mensual" value="{{ old('cuota_mesual') }}" autofocus hidden />
                    <input type="number"  class="form-control"
                    name="id_venta" value="{{$cuenta[0]->id}}" autofocus hidden />
                    {{-- <div class="form-group col-12">
                        <label>Interes
                            <span class="text-danger">*</span></label>
                        <input type="range" class="form-range" min="1" max="20"style="width:100%" id="customRange3">

                    </div> --}}
                </div>

            </div>
            <div class="form-group col-6 mb-0">
                <div class="card" style="background-color: #7d8bf2">
                    <div class="card-body">
                        <div class="text-center text-white">
                            <h1>Cuota Mensual</h1>
                            <h1>$<label id="monto_mensual" class="ml-1 mr-1" style="font-size: 40px">0.0</label>USD</h1>
                            <hr>
                        </div>
                        <div class="text-center text-white mt-1">
                            <h3>Su credito solicitado es de $<label id="monto_credito" class="ml-1 mr-1">0.0</label>USD
                            </h3>
                        </div>

                        <div class="card p-3 mt-3" style="background-color: #b4b4b4">
                            <div class="d-flex justify-content-between text-white">
                                <p>Iva</p>
                                <span><label id="iva" class="ml-1 mr-1">0</label>%</span>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between text-white">
                                <p>Tasa de interes mensual</p>
                                <span><label id="interes_credito" class="ml-1 mr-1">0</label>%</span>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between text-white">
                                <p>Plazo</p>
                                <span><label id="plazo_credito" class="ml-1 mr-1">0</label>meses</span>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
                {{-- <div class="d-flex d-flex justify-content-center">
                    <button type="button" class="btn btn-primary" onclick="calcularMontoMensual()">Calcular</button>
                    <button type="button" class="btn btn-primary" onclick="LimpiezaDatos()">limpiar</button>

                </div> --}}
                <div class="card-footer pt-0 d-flex justify-content-center">
                    {{-- <button type="button" class="btn btn-primary" onclick="calcularMontoMensual()">Calcular</button> --}}
                    <button type="button" class="btn btn-warning" onclick="LimpiezaDatos()">limpiar</button>
                    <button type="submit" class="btn btn-success ml-2">Asignar Nuevo credito</button>
                    {{-- <a href="{{ url('act_fijo') }}" class="btn btn-secondary">Cancelar</a> --}}
                </div>

            </div>
        </div>

    </div>

</form>
