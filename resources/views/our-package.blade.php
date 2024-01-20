@extends('layouts.app')
@section('title', 'Our Package')

@section('content')

<div class="site-breadcrumb" style="background: url({{ asset('front_assets/img/breadcrumb/breadcrumb-bg.jpg') }})">
<div class="container">
<h2 class="breadcrumb-title">Package</h2>
<ul class="breadcrumb-menu">
<li><a href="{{ url('/') }}">Home</a></li>
<li class="active">Package</li>
</ul>
</div>
</div>

<div class="team-area bg py-120">
<div class="container">
<div class="row">
<div class="col-lg-12 mx-auto">
<div class="site-heading text-center">
<span class="site-title-tagline">Package</span>
<h2 class="">Our Package</h2>
<p class="text-justify mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim elementum elit ac convallis. Proin bibendum tortor a lacus placerat, vel porttitor sem vulputate. Vivamus imperdiet nisl nec rutrum tincidunt. Pellentesque a urna pulvinar, ultrices mi vitae, dictum nibh. Sed sed libero eu justo aliquet pulvinar. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam posuere dignissim consequat.</p>
<p class="text-justify mb-10">Aenean quis auctor nibh. Phasellus a egestas mauris. Maecenas nec facilisis ante, at hendrerit justo. Sed molestie molestie malesuada. Ut sit amet odio quis felis pretium hendrerit quis in nunc. Vestibulum pretium justo id nulla laoreet viverra. Nam felis nisl, finibus ut ante vitae, congue aliquam arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc aliquam facilisis neque. Nam in metus id erat imperdiet aliquam. In quis hendrerit metus. Quisque elementum eros et lobortis sollicitudin. Fusce pulvinar tincidunt enim quis fringilla. Donec eu eros ac dolor sodales sollicitudin in ut est.</p>
<p class="text-justify mb-10">Phasellus lacus dolor, convallis in cursus eu, tristique eu sapien. Cras lacinia a lacus semper laoreet. Quisque eu nulla et eros egestas cursus vestibulum eget dolor. Phasellus vel maximus tortor, id elementum elit. Proin nec ex in ex tincidunt mattis. Vestibulum a felis eget neque fringilla dapibus. Nam vitae dignissim justo.</p>
</div>
</div>
</div>

<div class="site-heading text-center">
<h3 class="">Kanha Tour Package</h3>
</div>
<div class="row">
<div class="col-md-6 col-lg-4">
<div class="team-item">
<img src="{{ asset('front_assets/img/package/1.jpg') }}" alt="thumb">
<div class="team-content">
<div class="team-bio">
    <span>Tiger Safari India Tour</span>
<h5><a href="kanha-bandhavgarh-and-pench-tour.php">Kanha, Bandhavgarh and Pench Tour</a></h5>
<ul class="rating">
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star-half-stroke"></i></li>
</ul>
<span>Time Duration: 12 Nights/13 Days</span>
<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.dummy text of the printing and typesetting industry.</p>
<a href="kanha-bandhavgarh-and-pench-tour.php" class="theme-btn mt-10">View Details<i class="far fa-arrow-right"></i></a>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="team-item">
<img src="{{ asset('front_assets/img/package/2.jpg') }}" alt="thumb">
<div class="team-content">
<div class="team-bio">
    <span>Tiger Safari India Tour</span>
<h5><a href="#">Ranthambore Tour</a></h5>
<ul class="rating">
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star-half-stroke"></i></li>
</ul>
<span>Time Duration: 12 Nights/13 Days</span>
<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.dummy text of the printing and typesetting industry.</p>
<a href="" class="theme-btn mt-10">View Details<i class="far fa-arrow-right"></i></a>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="team-item">
<img src="{{ asset('front_assets/img/package/7.jpg') }}" alt="thumb">
<div class="team-content">
<div class="team-bio">
    <span>Tiger Safari India Tour</span>
<h5><a href="#">Sariska Tour</a></h5>
<ul class="rating">
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star-half-stroke"></i></li>
</ul>
<span>Time Duration: 12 Nights/13 Days</span>
<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.dummy text of the printing and typesetting industry.</p>
<a href="" class="theme-btn mt-10">View Details<i class="far fa-arrow-right"></i></a>
</div>
</div>
</div>
</div>
</div>

<div class="site-heading text-center">
<h3 class="">Ranthambore Tour Package</h3>
</div>
<div class="row">
    <div class="col-md-6 col-lg-4">
<div class="team-item">
<img src="{{ asset('front_assets/img/package/4.jpg') }}" alt="thumb">
<div class="team-content">
<div class="team-bio">
    <span>Tiger Safari India Tour</span>
<h5><a href="#">Kanha, Bandhavgarh and Pench Tour</a></h5>
<ul class="rating">
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star-half-stroke"></i></li>
</ul>
<span>Time Duration: 12 Nights/13 Days</span>
<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.dummy text of the printing and typesetting industry.</p>
<a href="" class="theme-btn mt-10">View Details<i class="far fa-arrow-right"></i></a>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="team-item">
<img src="{{ asset('front_assets/img/package/5.jpg') }}" alt="thumb">
<div class="team-content">
<div class="team-bio">
    <span>Tiger Safari India Tour</span>
<h5><a href="#">Kanha, Bandhavgarh and Pench Tour</a></h5>
<ul class="rating">
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star-half-stroke"></i></li>
</ul>
<span>Time Duration: 12 Nights/13 Days</span>
<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.dummy text of the printing and typesetting industry.</p>
<a href="" class="theme-btn mt-10">View Details<i class="far fa-arrow-right"></i></a>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="team-item">
<img src="{{ asset('front_assets/img/package/6.jpg') }}" alt="thumb">
<div class="team-content">
<div class="team-bio">
    <span>Tiger Safari India Tour</span>
<h5><a href="#">Kanha, Bandhavgarh and Pench Tour</a></h5>
<ul class="rating">
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star-half-stroke"></i></li>
</ul>
<span>Time Duration: 12 Nights/13 Days</span>
<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.dummy text of the printing and typesetting industry.</p>
<a href="" class="theme-btn mt-10">View Details<i class="far fa-arrow-right"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="blog-area py-120">
<div class="container">
<div class="row">
<div class="col-lg-6 mx-auto">
<div class="site-heading text-center">
<span class="site-title-tagline">Hotels</span>
<h2 class="site-title">Our Hotels</h2>
<p>It is a long established fact that a reader will be distracted</p>
</div>
</div>
</div>


<div class="hotel-slider owl-carousel owl-theme">
<div class="blog-item hotel">
<div class="blog-item-img">
<img src="{{ asset('front_assets/img/hotel/1.jpg') }}" alt="Thumb">
</div>
<div class="blog-item-info">
<h4 class="blog-title">
<a href="#">Kanha Resort</a>
</h4>
<ul class="rating">
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star-half-stroke"></i></li>
</ul>
<p>Address: Lorem ipsum dolor sit amet.</p>
<p class="price-tag"><strong>Price: 500/per night</strong></p>
<a class="blog-btn" href="#">Read More<i class="far fa-arrow-right"></i></a>
</div>
</div>
<div class="blog-item hotel">
<div class="blog-item-img">
<img src="{{ asset('front_assets/img/hotel/2.jpg') }}" alt="Thumb">
</div>
<div class="blog-item-info">
<h4 class="blog-title">
<a href="#">Kanha Resort</a>
</h4>
<ul class="rating">
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star-half-stroke"></i></li>
</ul>
<p>Address: Lorem ipsum dolor sit amet.</p>
<p class="price-tag"><strong>Price: 500/per night</strong></p>
<a class="blog-btn" href="#">Read More<i class="far fa-arrow-right"></i></a>
</div>
</div>
<div class="blog-item hotel">
<div class="blog-item-img">
<img src="{{ asset('front_assets/img/hotel/3.jpg') }}" alt="Thumb">
</div>
<div class="blog-item-info">
<h4 class="blog-title">
<a href="#">Kanha Resort</a>
</h4>
<ul class="rating">
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star"></i></li>
    <li><i class="fa-solid fa-star-half-stroke"></i></li>
</ul>
<p>Address: Lorem ipsum dolor sit amet.</p>
<p class="price-tag"><strong>Price: 500/per night</strong></p>
<a class="blog-btn" href="#">Read More<i class="far fa-arrow-right"></i></a>
</div>
</div>

</div>
</div>
</div>
@endsection