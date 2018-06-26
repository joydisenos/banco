@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Create')
@section('content')

<div class = 'container'>
    <h1>
        Create Account
    </h1>
    <form method = 'get' action = '{!!url("/home")!!}'>
        <button class = 'btn blue'>Home</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("cuenta")!!}'>
        <input type = 'hidden' name = '_token' value = '{{ Session::token() }}'>
       
            <input id="user_id" name = "user_id" type="hidden" value="{{Auth::user()->id}}" class="validate">
           
        <div class="input-field col s6">
           
            <select id="tipo" name = "tipo" class="validate">
                <option value="Basic">Basic Account</option>
                <option value="Saving Account">Saving Account</option>
                <option value="Money Market Account">Money Market Account</option>
            </select>
            <label for="tipo">Type</label>
        </div>
        
        <button class = 'btn red' type ='submit'>Create</button>
    </form>
</div>
@endsection