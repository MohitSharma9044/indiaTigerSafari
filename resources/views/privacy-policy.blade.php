@extends('layouts.app')
@section('title', 'Privacy Policy')

@section('content')

<div class="site-breadcrumb" style="background: url({{ $privacy->banner_image ? asset('storage/uploads/admin/policy/'.$privacy->banner_image) : asset('front_assets/img/breadcrumb/breadcrumb-bg.jpg') }})">
<div class="container">
<h2 class="breadcrumb-title">Privacy Policy</h2>
<ul class="breadcrumb-menu">
<li><a href="{{ url('/') }}">Home</a></li>
<li class="active">Privacy Policy</li>
</ul>
</div>
</div>


<div class="py-120">
<div class="container">
<div class="row">
<div class="col-lg-8">
@if($privacy)
@foreach($privacy->titles as $title)
<div class="terms-content">
<h3>{{$title->privacy_title}}</h3>
@if($title->descriptions)
@foreach($title->descriptions as $desc)
<p>{{$desc->privacy_description}}</p>
@endforeach
@endif
</div>
@endforeach
@endif

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