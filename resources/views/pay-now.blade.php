@extends('layouts.app')
@section('title', 'Pay Now')

@section('content')

<div class="site-breadcrumb" style="background: url({{ asset('front_assets/img/breadcrumb/breadcrumb-bg-2.jpg') }})">
<div class="container">
<h2 class="breadcrumb-title">Pay Now</h2>
<ul class="breadcrumb-menu">
<li><a href="{{ url('/') }}">Home</a></li>
<li class="active">Pay Now</li>
</ul>
</div>
</div>

<div class="contact-area py-120">
<div class="container">
<div class="site-heading text-center">
<h2 class="site-title">Payment Information</h2>
</div>
<div class="contact-wrapper">
<div class="row ">

<div class="col-lg-8 mb-20">
<div class="contact-form">
<div class="pay_tabs">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-inr-tab" data-bs-toggle="pill" data-bs-target="#pills-inr" type="button" role="tab" aria-controls="pills-inr" aria-selected="true"><i class="fa-solid fa-indian-rupee-sign"></i> INR PAYMENT</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-usd-tab" data-bs-toggle="pill" data-bs-target="#pills-usd" type="button" role="tab" aria-controls="pills-usd" aria-selected="false"><i class="fa-solid fa-dollar-sign"></i> USD PAYMENT</button>
  </li>
</ul>
</div>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-inr" role="tabpanel" aria-labelledby="pills-inr-tab">
      <h5>Payment Information</h5>
      <hr>
      <form method="post" action="" id="contact-form">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="amount">Amount</label>
<input type="text" class="form-control" name="amount" id="amount" oninput="this.value = this.value.replace(/[^0-9]/g, '')"  placeholder="₹ " required="">
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label for="name">Name</label>
<input type="text" class="form-control" name="name" id="name" placeholder="Name" required="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="email">Email</label>
<input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="phone">Phone</label>
<input type="text" class="form-control" name="phone" id="phone" oninput="this.value = this.value.replace(/[^0-9]/g, '')" placeholder="Phone" required="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="address">Address</label>
<input type="text" class="form-control" name="address" id="address" placeholder="Address" required="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="payment_for">Payment For</label>
<select class="form-select" name="payment_for">
<option value="Jeep Safari">Jeep Safari</option>
<option value="Hotel & Resort">Hotel & Resort</option>
<option value="Tour Package">Tour Package</option>
<option value="Taxi">Taxi</option>

</select>
</div>
</div>
</div>

<div class="form-group">
<textarea name="message" rows="3" class="form-control" placeholder="Write Your Message"></textarea>
</div>
<div class="row">
    <div class="col-lg-6">
        <button type="submit" class="theme-btn" name="inr_payment">Proceed To Pay <i class="far fa-paper-plane"></i></button>
    </div>
    <div class="col-lg-6 mt-10">
        <ul class="pay-images d-flex justify-content-end">
                        <li><img src="{{ asset('front_assets/img/pay-1.png') }}"></li>
                        <li><img src="{{ asset('front_assets/img/pay-2.png') }}"></li>
                        <li><img src="{{ asset('front_assets/img/pay-3.png') }}"></li>
                        <li><img src="{{ asset('front_assets/img/pay-4.png') }}"></li>
                        <li><img src="{{ asset('front_assets/img/pay-5.png') }}"></li>
                    </ul>
    </div>
</div>
</form>
  </div>
  
  <div class="tab-pane fade" id="pills-usd" role="tabpanel" aria-labelledby="pills-usd-tab">
      <h5>Payment Information</h5>
      <hr>
       <form method="post" action="" id="contact-form">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="amount">Amount</label>
<input type="text" class="form-control" name="amount" id="amount" oninput="this.value = this.value.replace(/[^0-9]/g, '')" placeholder="$ " required="">
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label for="name">Name</label>
<input type="text" class="form-control" name="name" id="name" placeholder="Name" required="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="email">Email</label>
<input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="phone">Phone</label>
<input type="text" class="form-control" name="phone" id="phone" oninput="this.value = this.value.replace(/[^0-9]/g, '')" placeholder="Phone" required="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="address">Address</label>
<input type="text" class="form-control" name="address" id="address" placeholder="Address" required="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="payment_for">Payment For</label>
<select class="form-select" name="payment_for">
<option value="Jeep Safari">Jeep Safari</option>
<option value="Hotel & Resort">Hotel & Resort</option>
<option value="Tour Package">Tour Package</option>
<option value="Taxi">Taxi</option>

</select>
</div>
</div>
</div>

<div class="form-group">
<textarea name="message" rows="3" class="form-control" placeholder="Write Your Message"></textarea>
</div>

<div class="row">
    <div class="col-lg-6">
        <button type="submit" class="theme-btn" name="usd_payment">Proceed To Pay <i class="far fa-paper-plane"></i></button>
    </div>
    <div class="col-lg-6 mt-10">
        <ul class="pay-images d-flex justify-content-end">
                        <li><img src="{{ asset('front_assets/img/pay-1.png') }}"></li>
                        <li><img src="{{ asset('front_assets/img/pay-2.png') }}"></li>
                        <li><img src="{{ asset('front_assets/img/pay-3.png') }}"></li>
                        <li><img src="{{ asset('front_assets/img/pay-4.png') }}"></li>
                        <li><img src="{{ asset('front_assets/img/pay-5.png') }}"></li>
                    </ul>
    </div>
</div>
</form>
  </div>
</div>
</div>
</div>
<div class="col-lg-4 mb-20">
    <div class="contact-form">
        <h3>Bank Information</h3>
        <hr>
        <table class="table table-bordered border-success">
            <tbody>
                <tr>
                    <th>BANK NAME:</th>
                    <td>Kotak Mahindra Bank</td>
                </tr>
                <tr>
                    <th>ACCOUNT NO.:</th>
                    <td>97687XXXXX</td>
                </tr>
                <tr>
                    <th>IFSC CODE:</th>
                    <td>97687XXXXX</td>
                </tr>
                <tr>
                    <th>BRANCH:</th>
                    <td>NOIDA</td>
                </tr>
                <tr>
                    <th>GSTIN:</th>
                    <td>3477XXXXXXX</td>
                </tr>
                <tr>
                    <th>PAN:</th>
                    <td>3477XXXXXXX</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
</div>
</div>

@endsection