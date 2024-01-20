@extends('layouts.app')
@section('title', 'Jeep Safari')

@section('content')

<div class="site-breadcrumb" style="background: url({{ $jeep->banner_image ? asset('storage/uploads/admin/jeep/'.$jeep->banner_image) : asset('front_assets/img/breadcrumb/breadcrumb-bg.jpg') }})">
<div class="container">
<h2 class="breadcrumb-title">Jeep Safari</h2>
<ul class="breadcrumb-menu">
<li><a href="{{ url('/') }}">Home</a></li>
<li class="active">Jeep Safari</li>
</ul>
</div>
</div>


<div class="blog-single-area pt-40 pb-40">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="blog-single-wrapper">
<div class="blog-single-content">
<div class="blog-info">
<div class="blog-details">
    @if($jeep)
    
<div class="terms_content">
<h3 class="blog-details-title mb-20">{{ $jeep->titles[0]->jeep_title}}</h3>
@if($jeep->titles[0]->descriptions)
@foreach($jeep->titles[0]->descriptions as $desc)
<p class="mb-10">{{$desc->jeep_description}}</p>
@endforeach
@endif
</div>
@endif
<div class="row">
<div class="col-md-6 mb-20 ">
<div class="inner-image">
<img src="{{ asset('storage/uploads/admin/jeep/'.$jeep->jeep_image_1) }}" alt="{{ $jeep->titles[0]->jeep_title}}">
<div class="overlay">
<a href="{{ url($jeep->jeep_button_link_1) }}">{{ $jeep->jeep_button_text_1}}</a>
</div>
</div>
</div>
<div class="col-md-6 mb-20">
<div class="inner-image">
<img src="{{ asset('storage/uploads/admin/jeep/'.$jeep->jeep_image_2) }}" alt="{{ $jeep->titles[0]->jeep_title}}">
<div class="overlay">
<a href="{{ url($jeep->jeep_button_link_2) }}">{{ $jeep->jeep_button_text_2}}</a>
</div>
</div>
</div>
</div>
@foreach($jeep->titles as $key => $title)
@if($key>0)
<div class="terms_content">
<h3 class="blog-details-title mb-20">{{$title->jeep_title}}</h3>
@if($title->descriptions)
@foreach($title->descriptions as $desc)
<p class="mb-20">{{$desc->jeep_description}}</p>
@endforeach
@endif
</div>
@endif
@endforeach
<hr>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4">
    <aside class="sidebar">
<div class="widget enquiry-now">
<h5 class="widget-title">Enquiry Now</h5>
@include('layouts.inc.enquiry-form-2')

</div>

<div class="widget recent-post">
<h5 class="widget-title">Important Links</h5>
<div class="recent-post-single">
<div class="recent-post-img">
<img src="assets/img/package/1.jpg" alt="thumb">
</div>
<div class="recent-post-bio">
<h6><a href="kanha-bandhavgarh-and-pench-tour.php">Kanha Bandhavgarh And Pench Tour</a></h6>
</div>
</div>
<div class="recent-post-single">
<div class="recent-post-img">
<img src="assets/img/package/2.jpg" alt="thumb">
</div>
<div class="recent-post-bio">
<h6><a href="kanha-bandhavgarh-and-pench-tour.php">Kanha Bandhavgarh And Pench Tour</a></h6>
</div>
</div>
<div class="recent-post-single">
<div class="recent-post-img">
<img src="assets/img/package/4.jpg" alt="thumb">
</div>
<div class="recent-post-bio">
<h6><a href="kanha-bandhavgarh-and-pench-tour.php">Kanha Bandhavgarh And Pench Tour</a></h6>
</div>
</div>

</div>

</aside>
</div>
</div>
</div>
</div>

@endsection