@extends('user.user')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
              <div class="card">
	                <div class="card-body">

	                	



<form action="{{url('user/new/transfer')}}" method="post">
  {{ csrf_field() }}
	<div class="form-group">
    <h3>Origin Account</h3>
    <div class="form-group">
                    <label for="exampleFormControlSelect1">Select your account</label>
                    <select class="form-control form-control-lg" id="cuenta_id" name="cuenta_id">
                      @foreach(Auth::user()->cuentas->where('estatus','1') as $cuenta)
                      <option value="{{$cuenta->id}}">{{hashid()->encode($cuenta->id)}} Available ${{$cuenta->disponible}}</option>
                      @endforeach
                    </select>
                  </div>

		<h3>Destination Account</h3>
                        <div class="input-group">

                          <div class="input-group-prepend bg-info">
                            <span class="input-group-text bg-transparent">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Destination Account" aria-label="Username" aria-describedby="colored-addon1" id="destination_account" name="destination_account">
                        </div>
                      </div>


                  <div class="form-group">
                      	<h3>Total Amount</h3>
                        <div class="input-group">
                          <div class="input-group-prepend bg-primary border-primary">
                            <span class="input-group-text bg-transparent text-white">$</span>
                          </div>
                          <input type="number" class="form-control" placeholder="Amount" aria-label="Amount" id="amount" name="amount">
                        </div>
                   </div>

                   <div class="form-group text-right">
                     
                     <button type="submit" class="btn btn-success mr-2">Transfer</button>
                   </div>

</form>






					</div>
				</div>
		</div>
	</div>
</div>
@endsection