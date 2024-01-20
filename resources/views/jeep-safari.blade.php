@extends('layouts.app')
@section('title', 'Jeep Safari')

@section('content')

<div class="site-breadcrumb" style="background: url({{ asset('front_assets/img/breadcrumb/breadcrumb-bg.jpg') }})">
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
<h3 class="blog-details-title mb-20">Jeep Safari</h3>
<p class="mb-10">
Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
</p>
<p class="mb-10">
But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.
</p>
<div class="row">
<div class="col-md-6 mb-20 ">
<div class="inner-image">
<img src="{{ asset('front_assets/img/blog/01.jpg') }}" alt>
<div class="overlay">
<a href="">Book Now</a>
</div>
</div>
</div>
<div class="col-md-6 mb-20">
<div class="inner-image">
<img src="{{ asset('front_assets/img/blog/02.jpg') }}" alt>
<div class="overlay">
<a href="">Book Now</a>
</div>
</div>
</div>
</div>
<h3 class="blog-details-title mb-20">Jeep Safari Tour</h3>
<p class="mb-20">
Power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection.
</p>
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