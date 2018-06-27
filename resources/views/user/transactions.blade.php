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
                            Amount
                          </th>
                          
                          
                        </tr>
                      </thead>
                      <tbody>
						@foreach(Auth::user()->movimientos as $movimiento)
						 <tr>
                          <td>
                            {{$movimiento->id}}
                          </td>
                          
                          <td>
                            {{$movimiento->tipo}}
                          </td>
                          <td>
							{{$movimiento->tipo}}
                          </td>
                          <td>
                            {{$movimiento->disponible}}
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
