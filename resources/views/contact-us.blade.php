@extends('layouts.app')
@section('title', 'Contact Us')

@section('content')

<div class="site-breadcrumb" style="background: url({{ asset('front_assets/img/breadcrumb/breadcrumb-bg.jpg') }})">
<div class="container">
<h2 class="breadcrumb-title">Contact Us</h2>
<ul class="breadcrumb-menu">
<li><a href="{{ url('/') }}">Home</a></li>
<li class="active">Contact Us</li>
</ul>
</div>
</div>

<div class="contact-area py-120">
<div class="container">
<div class="contact-wrapper">
<div class="row">
<div class="col-lg-8 align-self-center">
<div class="contact-form">
<div class="contact-form-header">
<h2>{{$contact->main_heading}}</h2>
<p>{{$contact->main_content}}</p>
</div>
<form method="POST" action="" id="contact-form">
<div class="row">
    <div class="col-md-6">
<div class="form-group">
<select class="form-select" name="title" required>
    <option value="Mr">Mr.</option>
    <option value="Mrs">Mrs.</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" name="name" placeholder="Your Name" required>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="email" class="form-control" name="email" placeholder="Your Email" required>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" name="phone" oninput="this.value = this.value.replace(/[^0-9]/g, '')" placeholder="Your Mobile" required>
</div>
</div>
</div>

<div class="form-group">
<textarea name="message" cols="30" rows="5" class="form-control" placeholder="Write Your Message"></textarea>
</div>
<button type="submit" name="contact_submit" class="theme-btn">Send
Message <i class="far fa-paper-plane"></i></button>
<div class="col-md-12 mt-3">
<div class="form-messege text-success"></div>
</div>
</form>
</div>
</div>
<div class="col-lg-4">
<div class="contact-content">
<div class="contact-info">
<div class="contact-info-icon">
<i class="fal fa-map-marker-alt"></i>
</div>
<div class="contact-info-content">
<h5>{{$contact->address}}</h5>
<p>{{$contact->address_content}}</p>
</div>
</div>
<div class="contact-info">
<div class="contact-info-icon">
<i class="fal fa-phone"></i>
</div>
<div class="contact-info-content">
<h5>{{$contact->call_title}}</h5>
<p>{{$contact->call_number}}</p>
</div>
</div>
<div class="contact-info">
<div class="contact-info-icon">
<i class="fal fa-envelope"></i>
</div>
<div class="contact-info-content">
<h5>{{$contact->email_title}}</h5>
<p><a href="mailto:{{$contact->email_address}}">{{$contact->email_address}}</a></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection