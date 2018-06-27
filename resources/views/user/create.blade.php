@extends('user.user')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                	<form method = 'POST' action = '{!!url("user/new/account")!!}'>
					        <input type = 'hidden' name = '_token' value = '{{ Session::token() }}'>
					        <input id="user_id" name = "user_id" type="hidden" value="{{Auth::user()->id}}" class="validate">
					           
					       

					         <div class="form-group">
			                    <label for="exampleFormControlSelect1">Account Type</label>
			                    <select class="form-control form-control-lg" id="tipo" name = "tipo">
			                       <option value="Basic">Basic Account</option>
					                <option value="Saving Account">Saving Account</option>
					                <option value="Money Market Account">Money Market Account</option>
			                    </select>
			                  </div>

					        
					        <button class = 'btn btn-primary btn-fw' type ='submit'>Create</button>
					    </form>

                	</div>
                </div>
              </div>
        </div>
</div>
@endsection