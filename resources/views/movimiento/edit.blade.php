@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Edit')
@section('content')

<div class = 'container'>
    <h1>
        Edit movimiento
    </h1>
    <form method = 'get' action = '{!!url("movimiento")!!}'>
        <button class = 'btn blue'>movimiento Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("movimiento")!!}/{!!$movimiento->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="input-field col s6">
            <input id="user_id" name = "user_id" type="text" class="validate" value="{!!$movimiento->
            user_id!!}"> 
            <label for="user_id">user_id</label>
        </div>
        <div class="input-field col s6">
            <input id="cuenta_id" name = "cuenta_id" type="text" class="validate" value="{!!$movimiento->
            cuenta_id!!}"> 
            <label for="cuenta_id">cuenta_id</label>
        </div>
        <div class="input-field col s6">
            <input id="tipo_operacion" name = "tipo_operacion" type="text" class="validate" value="{!!$movimiento->
            tipo_operacion!!}"> 
            <label for="tipo_operacion">tipo_operacion</label>
        </div>
        <div class="input-field col s6">
            <input id="estatus" name = "estatus" type="text" class="validate" value="{!!$movimiento->
            estatus!!}"> 
            <label for="estatus">estatus</label>
        </div>
        <div class="input-field col s6">
            <input id="detalles" name = "detalles" type="text" class="validate" value="{!!$movimiento->
            detalles!!}"> 
            <label for="detalles">detalles</label>
        </div>
        <div class="input-field col s6">
            <input id="descripcion" name = "descripcion" type="text" class="validate" value="{!!$movimiento->
            descripcion!!}"> 
            <label for="descripcion">descripcion</label>
        </div>
        <div class="input-field col s6">
            <input id="observaciones" name = "observaciones" type="text" class="validate" value="{!!$movimiento->
            observaciones!!}"> 
            <label for="observaciones">observaciones</label>
        </div>
        <button class = 'btn red' type ='submit'>Update</button>
    </form>
</div>
@endsection