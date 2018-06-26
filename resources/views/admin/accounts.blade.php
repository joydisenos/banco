@extends('admin.admin')
@section('content')
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
                            Edit
                          </th>
                        </tr>
                      </thead>
                      <tbody>
						@foreach($cuentas as $cuenta)
						 <tr>
                          <td>
                            {{$cuenta->id}}
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
                            <a href="" class="btn btn-primary">Edit</a>
                          </td>
                        </tr>
						@endforeach
                      </tbody>
                        
                    </table>
                  </div>
@endsection