@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Index')
@section('content')

<div class = 'container'>
    <h1>
        cuenta Index
    </h1>
    <div class="row">
        <form class = 'col s3' method = 'get' action = '{!!url("cuenta")!!}/create'>
            <button class = 'btn red' type = 'submit'>Create New cuenta</button>
        </form>
    </div>
    <table>
        <thead>
            <th>user_id</th>
            <th>tipo</th>
            <th>descripcion</th>
            <th>detalles</th>
            <th>estatus</th>
            <th>disponible</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($cuentas as $cuenta) 
            <tr>
                <td>{!!$cuenta->user_id!!}</td>
                <td>{!!$cuenta->tipo!!}</td>
                <td>{!!$cuenta->descripcion!!}</td>
                <td>{!!$cuenta->detalles!!}</td>
                <td>{!!$cuenta->estatus!!}</td>
                <td>{!!$cuenta->disponible!!}</td>
                <td>
                    <div class = 'row'>
                        <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/cuenta/{!!$cuenta->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/cuenta/{!!$cuenta->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                        <a href = '#' class = 'viewShow btn-floating orange' data-link = '/cuenta/{!!$cuenta->id!!}'><i class = 'material-icons'>info</i></a>
                    </div>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $cuentas->render() !!}

</div>
@endsection