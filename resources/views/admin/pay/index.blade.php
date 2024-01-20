@extends('admin.layouts.app')
@section('title', 'Pay Now')

@section('content')

<div class="row py-4">
    <h4 class="mb-3">Manage Pay Now</h4>
    @if(session()->has('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <div class="card">
        <h5>Bank Information:</h5>

        <form action="{{ route('admin.save-pay-now') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="mb-3">
            <label for="bank_name" class="form-label">Bank Name</label>
            <input type="text" class="form-control @error('bank_name')is-invalid @enderror" id="bank_name" placeholder="Bank Name" name="bank_name" value="@if($pay_now){{ $pay_now->bank_name }}@endif">
            @error('bank_name') <span class="invalid-feedback">{{ $message }}</span> @enderror

        </div>
        <div class="mb-3">
            <label for="account_no" class="form-label">Account No.</label>
            <input type="text" class="form-control @error('account_no')is-invalid @enderror" id="account_no" placeholder="Account No." name="account_no" value="@if($pay_now){{ $pay_now->account_no }}@endif">
            @error('account_no') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="ifsc_code" class="form-label">IFSC Code</label>
            <input type="text" class="form-control @error('ifsc_code')is-invalid @enderror" id="ifsc_code" placeholder="IFSC Code" name="ifsc_code" value="@if($pay_now){{ $pay_now->ifsc_code }}@endif">
            @error('ifsc_code') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="bank_branch" class="form-label">Branch Name</label>
            <input type="text" class="form-control @error('bank_branch')is-invalid @enderror" id="bank_branch" placeholder="Branch Name" name="bank_branch" value="@if($pay_now){{ $pay_now->bank_branch }}@endif">
            @error('bank_branch') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="gstin" class="form-label">GSTIN</label>
            <input type="text" class="form-control @error('gstin')is-invalid @enderror" id="gstin" placeholder="GSTIN" name="gstin" value="@if($pay_now){{ $pay_now->gstin }}@endif">
            @error('gstin') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="pan" class="form-label">PAN</label>
            <input type="text" class="form-control @error('pan')is-invalid @enderror" id="pan" placeholder="PAN" name="pan" value="@if($pay_now){{ $pay_now->pan }}@endif">
            @error('pan') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="banner_image" class="form-label">Banner Image</label>
            
            <div class="cpImg">
            @if($pay_now)
                <img src="{{ asset('storage/uploads/admin/pay/'.$pay_now->banner_image) }}" alt="">
                @else
                <img src="{{ asset('admin_assets/images/default-bg.jpg') }}" alt="">
                @endif
            </div>
            <input type="file" class="form-control @error('banner_image')is-invalid @enderror" id="banner_image" name="banner_image">
            @error('banner_image') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>
            <button type="submit" class="btn btn-success mb-3">Submit</button>
        </form>
    </div>
</div>
               
@endsection