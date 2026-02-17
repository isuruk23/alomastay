@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Vehicle Bookings Management</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Add/Edit Form -->
    <div class="card mb-4">
        <div class="card-header" id="form-title">Add Booking</div>
        <div class="card-body">
            <form action="{{ route('admin.transport.store') }}" method="POST" id="booking-form">
                @csrf
                <input type="hidden" name="booking_id" id="booking_id">

                <div class="row">
                    <div class="col-md-3 mb-3">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Customer Name" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <select name="vehicle_id" id="vehicle_id" class="form-control" required>
                            <option value="">Select Vehicle</option>
                            @foreach($vehicles as $vehicle)
                                <option value="{{ $vehicle->id }}">{{ $vehicle->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-3 mb-3">
                        <input type="number" name="passengers" id="passengers" class="form-control" placeholder="Passengers" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <input type="text" name="pickup_location" id="pickup_location" class="form-control" placeholder="Pickup Location" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <input type="text" name="destination" id="destination" class="form-control" placeholder="Destination" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Start Time</label>
                        <input type="datetime-local" name="check_in" id="check_in" class="form-control" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Return Time</label>
                        <input type="datetime-local" name="return_time" id="return_time" class="form-control">
                    </div>

                    <div class="col-md-3 mb-3">
                        <select name="status" id="status" class="form-control">
                            <option value="0">Pending</option>
                            <option value="1">Confirmed</option>
                            <option value="2">Completed</option>
                            <option value="3">Cancelled</option>
                        </select>
                    </div>
                </div>

                <button class="btn btn-primary" type="submit" id="submit-btn">Add Booking</button>
                <button type="button" class="btn btn-secondary" id="cancel-btn" style="display:none;">Cancel</button>
            </form>
        </div>
    </div>

    <!-- Bookings Table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer</th>
                <th>Phone</th>
                <th>Vehicle</th>
                <th>Pickup</th>
                <th>Destination</th>
                <th>Start</th>
                <th>Return</th>
                <th>Passengers</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $b)
            <tr>
                <td>{{ $b->id }}</td>
                <td>{{ $b->name }}</td>
                <td>{{ $b->phone }}</td>
                <td>{{ $b->vehicle->name ?? '' }}</td>
                <td>{{ $b->pickup_location }}</td>
                <td>{{ $b->destination }}</td>
                <td>{{ $b->check_in }}</td>
                <td>{{ $b->return_time }}</td>
                <td>{{ $b->passengers }}</td>
                <td>
                    @if($b->status == 0) Pending
                    @elseif($b->status == 1) Confirmed
                    @elseif($b->status == 2) Completed
                    @else Cancelled
                    @endif
                </td>
                <td>
                    <button class="btn btn-sm btn-success edit-btn"
                        data-id="{{ $b->id }}"
                        data-name="{{ $b->name }}"
                        data-phone="{{ $b->phone }}"
                        data-vehicle="{{ $b->vehicle_id }}"
                        data-pickup="{{ $b->pickup_location }}"
                        data-destination="{{ $b->destination }}"
                        data-checkin="{{ $b->check_in }}"
                        data-return="{{ $b->return_time }}"
                        data-passengers="{{ $b->passengers }}"
                        data-status="{{ $b->status }}">
                        Edit
                    </button>

                    <a href="{{ route('admin.transport.destroy', $b->id) }}"
                       class="btn btn-sm btn-danger"
                       onclick="return confirm('Delete this booking?')">
                       Delete
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
const editButtons = document.querySelectorAll('.edit-btn');


const booking_id = document.getElementById('booking_id');
const name = document.getElementById('name');
const phone = document.getElementById('phone');
const vehicle_id = document.getElementById('vehicle_id');
const pickup_location = document.getElementById('pickup_location');
const destination = document.getElementById('destination');
const check_in = document.getElementById('check_in');
const return_time = document.getElementById('return_time');
const passengers = document.getElementById('passengers');
const status = document.getElementById('status');
const formTitle = document.getElementById('form-title');
const submitBtn = document.getElementById('submit-btn');
const cancelBtn = document.getElementById('cancel-btn');


editButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        booking_id.value = btn.dataset.id;
        name.value = btn.dataset.name;
        phone.value = btn.dataset.phone;
        vehicle_id.value = btn.dataset.vehicle;
        passengers.value = btn.dataset.passengers;
        pickup_location.value = btn.dataset.pickup;
        destination.value = btn.dataset.destination;
        check_in.value = formatDateTime(btn.dataset.checkin);
        return_time.value = formatDateTime(btn.dataset.return); 
       
        status.value = btn.dataset.status;

        formTitle.innerText = 'Edit Booking';
        submitBtn.innerText = 'Update Booking';
        cancelBtn.style.display = 'inline-block';


        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});

function formatDateTime(dateStr) {
    if (!dateStr) return '';
    return new Date(dateStr).toISOString().slice(0,16);
}

// cancel-btn.addEventListener('click', () => {
//     document.getElementById('booking-form').reset();
//     booking_id.value = '';
//     cancel-btn.style.display = 'none';
//     submit-btn.innerText = 'Add Booking';
//     form-title.innerText = 'Add Booking';
// });
</script>
@endsection
