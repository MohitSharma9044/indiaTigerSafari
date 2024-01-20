@extends('admin.layouts.app')
@section('title', 'General Settings')

@section('content')

<div class="row py-4">
    <h4 class="mb-3">Manage General Seetins</h4>
    @if(session()->has('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <div class="card">
        <form action="{{ route('admin.settings.save-general') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="website_logo" class="form-label">Website Logo</label>
                <input type="file" class="form-control @error('website_logo')is-invalid @enderror" id="website_logo" name="website_logo">
                @error('website_logo') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="btn btn-success mb-3">Submit</button>
        </form>
    </div>
</div>

@endsection


@section('scripts')

@endsection
