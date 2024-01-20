@extends('layouts.app')
@section('title', 'About Us')

@section('content')

<div class="site-breadcrumb" style="background: url({{ asset('front_assets/img/breadcrumb/breadcrumb-bg.jpg') }})">
<div class="container">
<h2 class="breadcrumb-title">About Us</h2>
<ul class="breadcrumb-menu">
<li><a href="{{ url('/') }}">Home</a></li>
<li class="active">About Us</li>
</ul>
</div>
</div>


<div class="exhibition py-120">
<div class="container">
<div class="site-heading text-center">
<h2 class="site-title">{{ $about->main_heading}}</h2>
<p class="text-justify">{{ $about->main_content}}</p>
</div>
<div class="row">
<div class="col-lg-6">
<div class="exhibition-img">
@if($about)
<img src="{{ asset('storage/uploads/admin/about/'.$about->main_image) }}" alt="{{$about->main_heading}}" title="{{$about->main_heading}}">
@endif
</div>
</div>
<div class="col-lg-6">
<div class="exhibition-content">
<div class="site-heading mb-4">
<span class="site-title-tagline">{{$about->sub_heading_tag}}</span>
<h2 class="site-title mb-10">{{$about->sub_heading}}</h2>
<p>{{$about->sub_content}}</p>
</div>
<div class="exhibition-info">
<ul class="exhibition-list">
<li>
<div class="exhibition-item">
<h6>{{$about->heading1}}</h6>
<p>{{$about->content1}}</p>
</div>
</li>
<li>
<div class="exhibition-item">
<h6>{{$about->heading2}}</h6>
<p>{{$about->content2}}</p>
</div>
</li>
</ul>
</div>
</div>
</div>
@if($about->descriptions)
@foreach($about->descriptions as $desc)
<p class="text-justify">{{$desc->description}}</p>
@endforeach
@endif
</div>
</div>
</div>

<div class="event-area bg py-120">
<div class="container">
<div class="row">
<div class="col-lg-6 mx-auto">
<div class="site-heading text-center">
<span class="site-title-tagline">Package</span>
<h2 class="site-title">Our Package</h2>
<p>It is a long established fact that a reader will be distracted</p>
</div>
</div>
</div>
<div class="partner-slider owl-carousel owl-theme mb-20">
<div class="event-item">
<div class="event-img">
<img src="{{ asset('front_assets/img/package/1.jpg') }}" alt>
</div>
<div class="event-content">
<a href="our-package.php"><h4 class="event-title">Kanha, Bandhavgarh And Pench Tour</h4></a>
<ul class="event-list">
<li><i class="far fa-clock"></i> Time Duration: 12 Nights/13 Days</li>
<li><i class="far fa-location-dot"></i> Tiger Safari India Tour</li>
</ul>
<ul class="rating">
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star-half-stroke"></i></li>
</ul>
<a href="our-package.php" class="theme-btn mt-20">View Details<i class="far fa-arrow-right"></i></a>
</div>
</div>
<div class="event-item">
<div class="event-img">
<img src="{{ asset('front_assets/img/package/1.jpg') }}" alt>
</div>
<div class="event-content">
<a href="our-package.php"><h4 class="event-title">Kanha, Bandhavgarh And Pench Tour</h4></a>
<ul class="event-list">
<li><i class="far fa-clock"></i> Time Duration: 12 Nights/13 Days</li>
<li><i class="far fa-location-dot"></i> Tiger Safari India Tour</li>
</ul>
<ul class="rating">
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star-half-stroke"></i></li>
</ul>
<a href="our-package.php" class="theme-btn mt-20">View Details<i class="far fa-arrow-right"></i></a>
</div>
</div>
</div>
<div class="partner-slider-2 owl-carousel owl-theme">
<div class="event-item">
<div class="event-img">
<img src="{{ asset('front_assets/img/package/1.jpg') }}" alt>
</div>
<div class="event-content">
<a href="our-package.php"><h4 class="event-title">Kanha, Bandhavgarh And Pench Tour</h4></a>
<ul class="event-list">
<li><i class="far fa-clock"></i> Time Duration: 12 Nights/13 Days</li>
<li><i class="far fa-location-dot"></i> Tiger Safari India Tour</li>
</ul>
<ul class="rating">
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star-half-stroke"></i></li>
</ul>
<a href="our-package.php" class="theme-btn mt-20">View Details<i class="far fa-arrow-right"></i></a>
</div>
</div>
<div class="event-item">
<div class="event-img">
<img src="{{ asset('front_assets/img/package/1.jpg') }}" alt>
</div>
<div class="event-content">
<a href="our-package.php"><h4 class="event-title">Kanha, Bandhavgarh And Pench Tour</h4></a>
<ul class="event-list">
<li><i class="far fa-clock"></i> Time Duration: 12 Nights/13 Days</li>
<li><i class="far fa-location-dot"></i> Tiger Safari India Tour</li>
</ul>
<ul class="rating">
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star-half-stroke"></i></li>
</ul>
<a href="our-package.php" class="theme-btn mt-20">View Details<i class="far fa-arrow-right"></i></a>
</div>
</div>
</div>
</div>
</div>

@endsection