@extends('user.user')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
<a href="{{url('user/new/account')}}" class="btn btn-primary btn-fw mb-2">New Account</a>

<div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                         
                          <th>
                            Type
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Available
                          </th>
                          <th>
                            Deposit
                          </th>
                          
                        </tr>
                      </thead>
                      <tbody>
						@foreach(Auth::user()->cuentas as $cuenta)
						 <tr>
                          <td>
                            {{$cuenta->id}}
                          </td>
                          
                          <td>
                            {{$cuenta->tipo}}
                          </td>
                          <td>
                            @if($cuenta->estatus == 0)
                            Verifying Account
                            @elseif($cuenta->estatus == 1)
                            Active
                            @endif
                          </td>
                          <td>
                            {{$cuenta->disponible}}
                          </td>
                          <td>
                          	<a href="{{url('user').'/'.$cuenta->id.'/deposit'}}" class="btn btn-info btn-fw">Deposit</a>
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
