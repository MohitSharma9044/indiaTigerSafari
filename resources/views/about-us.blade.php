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
<h2 class="site-title">About India Tiger Safari</h2>
<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</div>
<div class="row">
<div class="col-lg-6">
<div class="exhibition-img">
<img src="{{ asset('front_assets/img/about/about.jpg') }}" alt>
</div>
</div>
<div class="col-lg-6">
<div class="exhibition-content">
<div class="site-heading mb-4">
<span class="site-title-tagline">Exhibition</span>
<h2 class="site-title mb-10">Animal Exhibition Of Our Wildlife Zoo</h2>
<p>
It is a long established fact that a reader will be distracted by the readable
content of a page when looking at its layout.
</p>
</div>
<div class="exhibition-info">
<ul class="exhibition-list">
<li>
<div class="exhibition-item">
<h6>Exhibition Start (10.00 AM)</h6>
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
</div>
</li>
<li>
<div class="exhibition-item">
<h6>Animal Feed Start (01.00 PM)</h6>
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
</div>
</li>
</ul>
</div>
</div>
</div>
<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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