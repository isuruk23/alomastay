@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Bookings Management</h2>

    <!-- Success/Error Messages -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Add/Edit Form -->
    <div class="card mb-4">
        <div class="card-header" id="form-title">Add Booking</div>
        <div class="card-body">
            <form action="{{ route('admin.booking.store') }}" method="POST" id="booking-form">
                @csrf
                <input type="hidden" name="booking_id" id="booking_id">
                
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" required>
                    </div>
                    <div class="col-md-2 mb-3">
                      
                         <select name="room_no" id="room_no" class="form-control" required>
                            <option value="">Select Room</option>
                            @foreach($rooms as $room)
                            <option value="{{$room->id}}">{{$room->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <input type="date" name="check_in" id="check_in" class="form-control" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <input type="date" name="check_out" id="check_out" class="form-control" required>
                    </div>
                    <div class="col-md-2 mb-3">
                        <select name="status" id="status" class="form-control">
                            <option value="0">Pending</option>
                            <option value="1">Confirmed</option>
                            <option value="2">Cancelled</option>
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
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Room No</th>
                <th>Check-in</th>
                <th>Check-out</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $b)
            <tr>
                <td>{{ $b->id }}</td>
                <td>{{ $b->name }}</td>
                <td>{{ $b->email }}</td>
                <td>{{ $b->phone }}</td>
                <td>{{ $b->room_no }}</td>
                <td>{{ $b->check_in }}</td>
                <td>{{ $b->check_out }}</td>
                <td>
                    @if($b->status == 0) Pending
                    @elseif($b->status == 1) Confirmed
                    @elseif($b->status == 2) Cancelled
                    @endif
                </td>
                <td>
                    <button class="btn btn-sm btn-success edit-btn"
                        data-id="{{ $b->id }}"
                        data-name="{{ $b->name }}"
                        data-email="{{ $b->email }}"
                        data-phone="{{ $b->phone }}"
                        data-room_no="{{ $b->room_no }}"
                        data-check_in="{{ $b->check_in }}"
                        data-check_out="{{ $b->check_out }}"
                        data-status="{{ $b->status }}">Edit</button>

                    <a href="{{ route('admin.booking.destroy', $b->id) }}" class="btn btn-sm btn-danger"
                        onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- JS to load data into form -->
<script>
const editButtons = document.querySelectorAll('.edit-btn');
const formTitle = document.getElementById('form-title');
const submitBtn = document.getElementById('submit-btn');
const cancelBtn = document.getElementById('cancel-btn');

const bookingId = document.getElementById('booking_id');
const name = document.getElementById('name');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const room_no = document.getElementById('room_no');
const check_in = document.getElementById('check_in');
const check_out = document.getElementById('check_out');
const status = document.getElementById('status');

editButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        bookingId.value = btn.dataset.id;
        name.value = btn.dataset.name;
        email.value = btn.dataset.email;
        phone.value = btn.dataset.phone;
        room_no.value = btn.dataset.room_no;
        check_in.value = formatDate(btn.dataset.check_in);
        check_out.value = formatDate(btn.dataset.check_out);
        status.value = btn.dataset.status;
        formTitle.innerText = 'Edit Booking';
        submitBtn.innerText = 'Update Booking';
        cancelBtn.style.display = 'inline-block';

        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});

function formatDate(dateStr) {
    const date = new Date(dateStr);
    return date.toISOString().split('T')[0]; // YYYY-MM-DD
}

cancelBtn.addEventListener('click', () => {
    formTitle.innerText = 'Add Booking';
    submitBtn.innerText = 'Add Booking';
    cancelBtn.style.display = 'none';

    bookingId.value = '';
    name.value = '';
    email.value = '';
    phone.value = '';
    room_no.value = '';
    check_in.value = '';
    check_out.value = '';
    status.value = 0;
});
</script>
@endsection
