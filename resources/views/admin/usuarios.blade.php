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
                            Email
                          </th>
                          <th>
                            Edit
                          </th>
                        </tr>
                      </thead>
                      <tbody>
						@foreach($usuarios as $usuario)
						 <tr>
                          <td>
                            {{$usuario->id}}
                          </td>
                          <td>
                            {{$usuario->name}}
                          </td>
                          <td>
                            {{$usuario->email}}
                          </td>
                          <td>
                            <a href="{{url('profile').'/'.$usuario->id}}" class="btn btn-primary">View</a>
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