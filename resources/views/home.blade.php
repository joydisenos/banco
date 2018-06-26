@extends('layouts.principal')

@section('content')
@include('includes.header2')
<section id="transactions">
<div class="container">
    <div class="row">
        <div class="col-md-12">

                <div class="panel-body">
                    @include('includes.notifications')

				@if(count(Auth::user()->cuentas))
                    <h2>Accounts List</h2>
					<div class="container">
					@foreach(Auth::user()->cuentas as $cuenta)
					<a href="{{url('/account').'/'.$cuenta->id}}">
						<div class="row">
							<div class="col-xs-3">
								{{$cuenta->id}}
							</div>
							<div class="col-xs-6">
								{{$cuenta->tipo}}
							</div>
							<div class="col-xs-3">
								{{$cuenta->disponible}}
							</div>
						</div>
					</a>
					@endforeach
					</div>
				@endif
                  
                </div>
          
        </div>
    </div>
</div>
</section>
@endsection
