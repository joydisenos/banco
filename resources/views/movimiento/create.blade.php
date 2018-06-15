@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Create')
@section('content')

<div class = 'container'>
    <h1>
        Create movimiento
    </h1>
    <form method = 'get' action = '{!!url("movimiento")!!}'>
        <button class = 'btn blue'>movimiento Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("movimiento")!!}'>
        <input type = 'hidden' name = '_token' value = '{{ Session::token() }}'>
        <div class="input-field col s6">
            <input id="user_id" name = "user_id" type="text" class="validate">
            <label for="user_id">user_id</label>
        </div>
        <div class="input-field col s6">
            <input id="cuenta_id" name = "cuenta_id" type="text" class="validate">
            <label for="cuenta_id">cuenta_id</label>
        </div>
        <div class="input-field col s6">
            <input id="tipo_operacion" name = "tipo_operacion" type="text" class="validate">
            <label for="tipo_operacion">tipo_operacion</label>
        </div>
        <div class="input-field col s6">
            <input id="estatus" name = "estatus" type="text" class="validate">
            <label for="estatus">estatus</label>
        </div>
        <div class="input-field col s6">
            <input id="detalles" name = "detalles" type="text" class="validate">
            <label for="detalles">detalles</label>
        </div>
        <div class="input-field col s6">
            <input id="descripcion" name = "descripcion" type="text" class="validate">
            <label for="descripcion">descripcion</label>
        </div>
        <div class="input-field col s6">
            <input id="observaciones" name = "observaciones" type="text" class="validate">
            <label for="observaciones">observaciones</label>
        </div>
        <button class = 'btn red' type ='submit'>Create</button>
    </form>
</div>
@endsection