@extends('admin.layouts.app')
@section('title', 'Contact Us')

@section('content')

<div class="row py-4">
    <h4 class="mb-3">Manage Contact Us</h4>
    @if(session()->has('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <div class="card">
        <form action="{{ route('admin.save-contact') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="contact_id" value="{{ $contact_us->id ?? '' }}">
        <div class="mb-3">
            <label for="main_heading" class="form-label">Heading</label>
            <input type="text" class="form-control @error('main_heading')is-invalid @enderror" id="main_heading" value="{{ $contact_us->main_heading ?? '' }}" placeholder="Heading" name="main_heading">
            @error('main_heading') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="main_content" class="form-label">Content</label>
            <textarea class="form-control" id="main_content" placeholder="Main Contrnt" name="main_content" rows="4">{{ $contact_us->main_content ?? '' }}</textarea>
        </div>

        <h4>Manage Address</h4>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label for="address" class="form-label">Heading</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter Address Title" value="{{ $contact_us->address_title ?? 'Office Address' }}" name="address_title">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label for="address_content" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address_content" placeholder="Enter Address" value="{{ $contact_us->address_content ?? '' }}" name="address_content">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label for="call_title" class="form-label">Call Heading</label>
                    <input type="text" class="form-control" id="call_title" placeholder="Enter Call Title" value="{{ $contact_us->call_title ?? 'Call Us' }}" name="call_title">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label for="call_number" class="form-label">Call Number</label>
                    <input type="text" class="form-control" id="call_number" placeholder="Enter Mobile Number" value="{{ $contact_us->call_number ?? '' }}" name="call_number">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label for="email_title" class="form-label">Email Heading</label>
                    <input type="text" class="form-control" id="email_title" placeholder="Enter Email Title" value="{{ $contact_us->call_number ?? 'Email Us' }}" name="email_title">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label for="email_address" class="form-label">Email Address</label>
                    <input type="text" class="form-control" id="email_address" placeholder="Enter Email Address" value="{{ $contact_us->email_address ?? '' }}" name="email_address">
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="banner_image" class="form-label">Banner Image</label>
            <div class="cpImg">
            @if($contact_us->banner_image)
                <img src="{{ asset('storage/uploads/admin/contact/'.$contact_us->banner_image) }}" alt="{{ $contact_us->main_heading ?? '' }}">
                @else
                <img src="{{ asset('admin_assets/images/default-bg.jpg') }}" alt="Main Heading">
                @endif
            </div>
            <input type="file" class="form-control" id="banner_image" name="banner_image">
        </div>
            <button type="submit" class="btn btn-success mb-3">Submit</button>
        </form>
    </div>
</div>
               
@endsection