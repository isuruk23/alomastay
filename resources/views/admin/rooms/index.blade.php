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
            <form action="{{ route('admin.rooms.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">

            {{-- Room Name --}}
            <div class="col-md-6 mb-3">
                <input type="text" name="name"
                    class="form-control @error('name') is-invalid @enderror"
                    value="{{ old('name') }}" placeholder="Room Name" >
                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            {{-- Room No --}}
            <div class="col-md-6 mb-3">
                <input type="text" name="no"
                    class="form-control @error('no') is-invalid @enderror"
                    value="{{ old('no') }}" placeholder="Room No" >
                @error('no') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            {{-- Intro --}}
            <div class="col-md-6 mb-3">
                <input type="text" name="intro"
                    class="form-control @error('intro') is-invalid @enderror"
                    value="{{ old('intro') }}" placeholder="Room Intro" >
                @error('intro') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            {{-- Price --}}
            <div class="col-md-6 mb-3">
                <input type="number" step="0.01" name="price"
                    class="form-control @error('price') is-invalid @enderror"
                    value="{{ old('price') }}" placeholder="Room Price" >
                @error('price') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            {{-- Size --}}
            <div class="col-md-6 mb-3">
                <input type="text" name="size"
                    class="form-control @error('size') is-invalid @enderror"
                    value="{{ old('size') }}" placeholder="Room Size" >
                @error('size') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            {{-- Bed --}}
            <div class="col-md-6 mb-3">
                <input type="text" name="bed"
                    class="form-control @error('bed') is-invalid @enderror"
                    value="{{ old('bed') }}" placeholder="Bed Type" >
                @error('bed') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            {{-- Occupancy --}}
            <div class="col-md-6 mb-3">
                <input type="number" name="occupancy"
                    class="form-control @error('occupancy') is-invalid @enderror"
                    value="{{ old('occupancy') }}" placeholder="Occupancy" >
                @error('occupancy') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            {{-- View --}}
            <div class="col-md-6 mb-3">
                <input type="text" name="view"
                    class="form-control @error('view') is-invalid @enderror"
                    value="{{ old('view') }}" placeholder="View" >
                @error('view') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            {{-- Floor --}}
            <div class="col-md-6 mb-3">
                <input type="text" name="floor"
                    class="form-control @error('floor') is-invalid @enderror"
                    value="{{ old('floor') }}" placeholder="Floor" >
                @error('floor') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            {{-- Main Image --}}
            <div class="col-md-6 mb-3">
                <label class="form-label">Main Image</label>
                <input type="file" name="image"
                    class="form-control @error('image') is-invalid @enderror">
                @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            {{-- Gallery Images --}}
            <div class="col-md-6 mb-3">
                <label class="form-label">Gallery Images</label>
                <input type="file" name="images[]"
                    class="form-control @error('images.*') is-invalid @enderror" multiple>
                @error('images.*') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            {{-- Status --}}
            <div class="col-md-6 mb-3 d-flex align-items-center">
                <div class="form-check mt-4">
                    <input type="checkbox" name="status" class="form-check-input"
                        {{ old('status', true) ? 'checked' : '' }}>
                    <label class="form-check-label">Active</label>
                </div>
            </div>

            {{-- Submit --}}
            <div class="col-12">
                <button class="btn btn-primary">Add Room</button>
                <a href="{{ route('admin.rooms.index') }}" class="btn btn-secondary">Back</a>
            </div>

        </div>
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
                            <a href="{{ route('admin.rooms.edit', $room->id) }}" class="btn btn-sm btn-success edit-btn" 
                                >Edit</a>

                            <a href="{{ route('admin.rooms.destroy', $room->id) }}" 
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

@endsection
