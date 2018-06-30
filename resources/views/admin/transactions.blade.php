@extends('admin.admin')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">



@if(count($pendientes))
<h2>New Transactions</h2>
<br>
<div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>

                          <th>
                            User
                          </th>

                          <th>
                            Origin Account
                          </th>

                          <th>
                            Destination Account
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
            @foreach($pendientes as $movimiento)
             <tr>
                          <td>
                            {{hashid()->encode($movimiento->id)}}
                          </td>

                          <td>
                            {{title_case($movimiento->user->name)}}
                          </td>

                          <td>
                            {{hashid()->encode($movimiento->cuenta_id)}}
                          </td>

                          <td>
                            {{hashid()->encode($movimiento->cuenta_destino_id)}}
                          </td>
                          
                          <td>

                            @if($movimiento->tipo_operacion == 1)
                              Deposit
                              @elseif($movimiento->tipo_operacion == 2)
                              Transfer
                              @endif

                          </td>
                          <td>
                             <a href="{{url('transaction').'/'.$movimiento->id.'/'.'1'}}" class="btn btn-outline-success">Aprove</a>
                             <a href="{{url('transaction').'/'.$movimiento->id.'/'.'2'}}" class="btn btn-outline-danger">Deny</a>
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
            <br>
@endif


<h2>History</h2>
<br>
                	<div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>

                          <th>
                          	User
                          </th>

                          <th>
                            Origin Account
                          </th>

                          <th>
                            Destination Account
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
						@foreach($movimientos as $movimiento)
						 <tr>
                          <td>
                            {{hashid()->encode($movimiento->id)}}
                          </td>

                          <td>
                          	{{title_case($movimiento->user->name)}}
                          </td>

                          <td>
                            {{hashid()->encode($movimiento->cuenta_id)}}
                          </td>

                          <td>
                            {{hashid()->encode($movimiento->cuenta_destino_id)}}
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