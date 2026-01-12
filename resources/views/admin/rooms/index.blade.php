@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Rooms Management</h2>

    <!-- Success/Error Messages -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
   @if(session('warning'))
        <div class="alert alert-warning"> {{ session('warning') }}</div>
    @endif

    <!-- Add/Edit Form -->
    <div class="card mb-4">
        <div class="card-header" id="form-title">Add Room</div>
        <div class="card-body">
            <div class="row">
                <div class="col-6">
            <form action="{{ route('rooms.store') }}" method="POST" id="room-form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="room_id" id="room_id">
                <div class="mb-3">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Room Name" required>
                </div>
                 <div class="mb-3">
                    <input type="text" name="intro" id="intro" class="form-control" placeholder="Room intro" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="price" id="price" class="form-control" placeholder="Room price" required>
                </div>
                <div class="mb-3">
                    <input type="file" name="image" id="image" class="form-control" placeholder="Room image" required>
                </div>
                <div class="form-check mb-3">
                    <input type="checkbox" name="status" id="status" class="form-check-input" checked>
                    <label class="form-check-label">Active</label>
                </div>
                <button class="btn btn-primary" type="submit" id="submit-btn">Add Room</button>
                <button type="button" class="btn btn-secondary" id="cancel-btn" style="display:none;">Cancel</button>
            </form>
            </div>
            <div class="col-6">
                 <!-- Rooms Table -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Active</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rooms as $room)
                    <tr>
                        <td>{{ $room->id }}</td>
                        <td>{{ $room->name }}</td>
                        <td>${{ $room->price }}</td>
                        <td>@if($room->image)
                            <img src="{{ asset('public/'.$room->image) }}" width="120">
                            @endif
                        </td>
                        <td>{{ $room->is_active ? 'Yes' : 'No' }}</td>
                        <td>
                            <button class="btn btn-sm btn-success edit-btn" 
                                data-id="{{ $room->id }}" 
                                data-name="{{ $room->name }}" 
                                data-intro="{{ $room->intro }}" 
                                data-price="{{ $room->price }}"
                                data-active="{{ $room->is_active }}">Edit</button>

                            <a href="{{ route('rooms.destroy', $room->id) }}" 
                                class="btn btn-sm btn-danger" 
                                onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            </div>
        </div>
    </div>

   
</div>

<!-- JS to load data into form -->
<script>
    const editButtons = document.querySelectorAll('.edit-btn');
    const formTitle = document.getElementById('form-title');
    const submitBtn = document.getElementById('submit-btn');
    const cancelBtn = document.getElementById('cancel-btn');
    const roomIdInput = document.getElementById('room_id');
    const nameInput = document.getElementById('name');
    const introInput = document.getElementById('intro');
    const priceInput = document.getElementById('price');
    const isActiveInput = document.getElementById('is_active');

    editButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const id = btn.dataset.id;
            const name = btn.dataset.name;
            const intro = btn.dataset.intro;
            const price = btn.dataset.price;
            const active = btn.dataset.active;

            formTitle.innerText = 'Edit Room';
            submitBtn.innerText = 'Update Room';
            cancelBtn.style.display = 'inline-block';

            roomIdInput.value = id;
            nameInput.value = name;
            introInput.value = intro;
            priceInput.value = price;
            isActiveInput.checked = active == 1 ? true : false;

            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    });

    cancelBtn.addEventListener('click', () => {
        formTitle.innerText = 'Add Room';
        submitBtn.innerText = 'Add Room';
        cancelBtn.style.display = 'none';
        roomIdInput.value = '';
        nameInput.value = '';
        introInput.value = '';
        priceInput.value = '';
        isActiveInput.checked = true;
    });
</script>
@endsection
