@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard Little Ariyaana') }}</div>

                <div class="card-body">
                    @if(session('error'))
                        <div style="color:red; font-weight:bold; margin-bottom:10px;">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center my-2">
       
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">My Bookings</div>

                <div class="card-body">
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
