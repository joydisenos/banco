@extends('layouts.principal')

@section('content')
@include('includes.header2')
<section id="transactions">
<div class="container">
    <div class="row">
        <div class="col-md-12">

                <div class="panel-body">
                    @include('includes.notifications')

                  
                </div>
          
        </div>
    </div>
</div>
</section>
@endsection
