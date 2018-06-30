@extends('admin.admin')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
      <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                            type
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Available
                          </th>
                          <th>
                            Activate / Deactivate
                          </th>
                        </tr>
                      </thead>
                      <tbody>
            @foreach($cuentas as $cuenta)
             <tr>
                          <td>
                            {{hashid()->encode($cuenta->id)}}
                          </td>
                          <td>
                            {{$cuenta->user->name}}
                          </td>
                          <td>
                            {{$cuenta->tipo}}
                          </td>
                          <td>
                            {{$cuenta->estatus}}
                          </td>
                          <td>
                            {{$cuenta->disponible}}
                          </td>
                          <td>
                            @if($cuenta->estatus == 0)
                            <a href="{{url('/account/status').'/'.$cuenta->id.'/'.'1'}}" class="btn btn-primary btn-fw">Activate</a>
                            @elseif($cuenta->estatus == 1)
                            <a href="{{url('/account/status').'/'.$cuenta->id.'/'.'2'}}" class="btn btn-danger btn-fw">Deactivate</a>
                            @elseif($cuenta->estatus == 2)
                            <a href="{{url('/account/status').'/'.$cuenta->id.'/'.'1'}}" class="btn btn-dark btn-fw">Activate</a>
                            @endif
                          </td>
                        </tr>
            @endforeach
                      </tbody>
                        
                    </table>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>

@endsection