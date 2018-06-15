@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show')
@section('content')

<div class = 'container'>
    <h1>
        Show cuenta
    </h1>
    <form method = 'get' action = '{!!url("cuenta")!!}'>
        <button class = 'btn blue'>cuenta Index</button>
    </form>
    <table class = 'highlight bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>user_id : </i></b>
                </td>
                <td>{!!$cuenta->user_id!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>tipo : </i></b>
                </td>
                <td>{!!$cuenta->tipo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>descripcion : </i></b>
                </td>
                <td>{!!$cuenta->descripcion!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>detalles : </i></b>
                </td>
                <td>{!!$cuenta->detalles!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>estatus : </i></b>
                </td>
                <td>{!!$cuenta->estatus!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>disponible : </i></b>
                </td>
                <td>{!!$cuenta->disponible!!}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection