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
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
            </select>
            <label for="tipo">Type</label>
        </div>
        
        <button class = 'btn red' type ='submit'>Create</button>
    </form>
</div>
@endsection