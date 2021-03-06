@extends('admin.admin')
@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 <div class="display-2">{{title_case($user->name)}}</div>
                 
                  <div class="row">
                    <div class="col-md-6">
                      <address>
                        <p class="font-weight-bold">Adress</p>
                        No adress jet
                        <!--
                        <p>
                          695 lsom Ave,
                        </p>
                        <p>
                          Suite 00
                        </p>
                        <p>
                          San Francisco, CA 94107
                        </p>
                    -->
                      </address>
                    </div>
                    <div class="col-md-6">
                      <address class="text-primary">
                        <p class="font-weight-bold">
                          E-mail
                        </p>
                        <p class="mb-2">
                         {{$user->email}}
                        </p>
                       
                      </address>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Accounts {{$user->cuentas->count()}}</h4>
                  <p class="card-description">
                    Member Since
                    <code>{{$user->created_at->format('d/m/Y')}}</code>
                  </p>
                  <!--<p class="lead">
                    For personal use
                  </p>-->
                 
                </div>
              </div>
              </div>
	</div>
</div>

@endsection