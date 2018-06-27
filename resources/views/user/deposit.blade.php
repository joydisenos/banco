@extends('user.user')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
              <div class="card">
	                <div class="card-body">

	                	<h2>Deposit</h2>

						<div class="text-left">
	                		<p>Account Id {{$cuenta->id}}</p>
	                	</div>

	                	<div class="display-4 text-right">
	                		Available {{$cuenta->disponible}}
	                	</div>



<form action="{{url('user/new/transaction')}}" method="POST">
	  {{ csrf_field() }}
	  <input type="hidden" value="{{$cuenta->id}}" name="cuenta_id">
	<div class="form-group">
		<h3>Transaction Number</h3>
                        <div class="input-group">

                         
                          <input type="number" class="form-control" placeholder="Transaction number" aria-describedby="colored-addon1" name="detalles[]" required>
                        </div>
                      </div>

                      <div class="form-group">
						<h3>Transaction Date</h3>
                        <div class="input-group">

                         
                          <input type="date" class="form-control" aria-describedby="colored-addon1" ame="detalles[]" required>
                        </div>
                      </div>


                  <div class="form-group">
                      	<h3>Total Amount</h3>
                        <div class="input-group">
                          <div class="input-group-prepend bg-primary border-primary">
                            <span class="input-group-text bg-transparent text-white">$</span>
                          </div>
                          <input type="number" class="form-control" placeholder="Amount" aria-label="Username" aria-describedby="colored-addon2" name="monto" required>
                        </div>
                   </div>

                   <div class="form-group text-right">
                   	<button type="submit" class="btn btn-success">Submit</button>
                   </div>
	

</form>






					</div>
				</div>
		</div>
	</div>
</div>
@endsection