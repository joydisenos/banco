@extends('user.user')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
              <div class="card">
	                <div class="card-body">

	                	<div class="display-4 text-right">
	                		Available {{$cuenta->disponible}}
	                	</div>



<form action="">
	<div class="form-group">
		<h3>Destination Account</h3>
                        <div class="input-group">

                          <div class="input-group-prepend bg-info">
                            <span class="input-group-text bg-transparent">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="colored-addon1">
                        </div>
                      </div>


                  <div class="form-group">
                      	<h3>Total Amount</h3>
                        <div class="input-group">
                          <div class="input-group-prepend bg-primary border-primary">
                            <span class="input-group-text bg-transparent text-white">$</span>
                          </div>
                          <input type="number" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="colored-addon2">
                        </div>
                   </div>

</form>






					</div>
				</div>
		</div>
	</div>
</div>
@endsection