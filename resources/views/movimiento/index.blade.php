@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Index')
@section('content')

<div class = 'container'>
    <h1>
        movimiento Index
    </h1>
    <div class="row">
        <form class = 'col s3' method = 'get' action = '{!!url("movimiento")!!}/create'>
            <button class = 'btn red' type = 'submit'>Create New movimiento</button>
        </form>
    </div>
    <table>
        <thead>
            <th>user_id</th>
            <th>cuenta_id</th>
            <th>tipo_operacion</th>
            <th>estatus</th>
            <th>detalles</th>
            <th>descripcion</th>
            <th>observaciones</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($movimientos as $movimiento) 
            <tr>
                <td>{!!$movimiento->user_id!!}</td>
                <td>{!!$movimiento->cuenta_id!!}</td>
                <td>{!!$movimiento->tipo_operacion!!}</td>
                <td>{!!$movimiento->estatus!!}</td>
                <td>{!!$movimiento->detalles!!}</td>
                <td>{!!$movimiento->descripcion!!}</td>
                <td>{!!$movimiento->observaciones!!}</td>
                <td>
                    <div class = 'row'>
                        <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/movimiento/{!!$movimiento->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/movimiento/{!!$movimiento->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                        <a href = '#' class = 'viewShow btn-floating orange' data-link = '/movimiento/{!!$movimiento->id!!}'><i class = 'material-icons'>info</i></a>
                    </div>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $movimientos->render() !!}

</div>
@endsection