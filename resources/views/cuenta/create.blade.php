@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Create')
@section('content')

<div class = 'container'>
    <h1>
        Create cuenta
    </h1>
    <form method = 'get' action = '{!!url("cuenta")!!}'>
        <button class = 'btn blue'>cuenta Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("cuenta")!!}'>
        <input type = 'hidden' name = '_token' value = '{{ Session::token() }}'>
        <div class="input-field col s6">
            <input id="user_id" name = "user_id" type="text" class="validate">
            <label for="user_id">user_id</label>
        </div>
        <div class="input-field col s6">
            <input id="tipo" name = "tipo" type="text" class="validate">
            <label for="tipo">tipo</label>
        </div>
        <div class="input-field col s6">
            <input id="descripcion" name = "descripcion" type="text" class="validate">
            <label for="descripcion">descripcion</label>
        </div>
        <div class="input-field col s6">
            <input id="detalles" name = "detalles" type="text" class="validate">
            <label for="detalles">detalles</label>
        </div>
        <div class="input-field col s6">
            <input id="estatus" name = "estatus" type="text" class="validate">
            <label for="estatus">estatus</label>
        </div>
        <div class="input-field col s6">
            <input id="disponible" name = "disponible" type="text" class="validate">
            <label for="disponible">disponible</label>
        </div>
        <button class = 'btn red' type ='submit'>Create</button>
    </form>
</div>
@endsection