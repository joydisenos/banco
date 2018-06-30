@extends('user.user')

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
                            Type
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Amount ($)
                          </th>
                          <th>
                            Date
                          </th>
                          
                          
                        </tr>
                      </thead>
                      <tbody>
						@foreach(Auth::user()->movimientos as $movimiento)
						 <tr>
                          <td>
                            {{hashid()->encode($movimiento->id)}}
                          </td>
                          
                          <td>

                            @if($movimiento->tipo_operacion == 1)
                              Deposit
                              @elseif($movimiento->tipo_operacion == 2)
                              Transfer
                              @endif

                          </td>
                          <td>
							               @if($movimiento->estatus == 0)
                              Verifying Transaction
                              @elseif($movimiento->estatus == 1)
                              <span style="color:green;">Verified</span>
                              @elseif($movimiento->estatus == 2)
                              <span style="color:red;">Denied</span>
                              @endif
                          </td>
                          <td>
                            {{$movimiento->monto}}
                          </td>
                          <td>
                            {{$movimiento->created_at->format('d/m/Y')}}
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
