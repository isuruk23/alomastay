@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
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
                <div class="card-header">Packages</div>

                <div class="card-body">
                  <p>{{ $package_count }}</p>
                </div>
                <div class="card-footer"><a href="/multi_day_tours">view</a></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Rooms</div>

                <div class="card-body">
                  <p>{{ $rooms_count }}</p>
                </div>
                <div class="card-footer"><a href="/admin/room">view</a></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Bookings</div>

                <div class="card-body">
                  <p>{{ $bookings_count }}</p>
                </div>
                <div class="card-footer"><a href="/admin/booking">view</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
