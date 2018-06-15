@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show')
@section('content')

<div class = 'container'>
    <h1>
        Show movimiento
    </h1>
    <form method = 'get' action = '{!!url("movimiento")!!}'>
        <button class = 'btn blue'>movimiento Index</button>
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
                <td>{!!$movimiento->user_id!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>cuenta_id : </i></b>
                </td>
                <td>{!!$movimiento->cuenta_id!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>tipo_operacion : </i></b>
                </td>
                <td>{!!$movimiento->tipo_operacion!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>estatus : </i></b>
                </td>
                <td>{!!$movimiento->estatus!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>detalles : </i></b>
                </td>
                <td>{!!$movimiento->detalles!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>descripcion : </i></b>
                </td>
                <td>{!!$movimiento->descripcion!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>observaciones : </i></b>
                </td>
                <td>{!!$movimiento->observaciones!!}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection