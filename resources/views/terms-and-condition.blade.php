@extends('layouts.app')
@section('title', 'Terms & Conditions')

@section('content')

<div class="site-breadcrumb" style="background: url({{ asset('front_assets/img/breadcrumb/breadcrumb-bg.jpg') }})">
<div class="container">
<h2 class="breadcrumb-title">Terms & Conditions</h2>
<ul class="breadcrumb-menu">
<li><a href="{{ url('/') }}">Home</a></li>
<li class="active">Terms & Conditions</li>
</ul>
</div>
</div>


<div class="py-120">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="terms-content">
<h3>Terms & Condition</h3>
<p>
Sed ac sollicitudin ipsum. Vivamus vulputate, enim sit amet aliquet lacinia, ex mauris
aliquam elit, vel pharetra augue arcu ultricies magna. Suspendisse justo erat, dignissim
ut imperdiet ut, convallis vitae urna. Vivamus tincidunt lacinia metus sed suscipit.
Phasellus luctus rhoncus mauris ut euismod. Aliquam elementum malesuada erat, vitae
bibendum ex rutrum eget. Mauris sed nunc mauris. Curabitur semper sed justo a
pellentesque. In hac habitasse platea dictumst. Mauris semper volutpat iaculis.
Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
Curabitur consectetur dignissim nulla id ornare. Praesent placerat dolor vitae tellus
lacinia, a malesuada est sodales. Praesent at consectetur sem, sed scelerisque arcu.
Maecenas malesuada lorem id sagittis scelerisque. In hac habitasse platea dictumst.
</p>
</div>
<div class="terms-content">
<h3>Cookie</h3>
<p>
Pellentesque sit amet nulla facilisis, lobortis ex at, consequat diam. Pellentesque sed
dui lorem. Aliquam vel euismod nunc. Nulla facilisi. Donec consectetur faucibus rutrum.
Pellentesque ac ultricies sapien, ac iaculis erat. Vivamus posuere eget nulla sit amet
vehicula. Donec finibus maximus eros, at tincidunt ipsum vestibulum ac. Integer vel
metus vehicula, consequat velit a, eleifend mi. Curabitur erat mauris, luctus non dictum
vel, fringilla dignissim quam. Phasellus eleifend porta fermentum. Pellentesque posuere
massa vitae odio pulvinar feugiat. Fusce a risus sodales, maximus sapien sit amet,
pharetra ipsum. Vivamus varius eros ac sapien pulvinar, nec tincidunt dui bibendum.
Proin consectetur nibh tortor, nec vulputate ex posuere eget.
</p>
</div>
<div class="terms-content">
<h3>Payments</h3>
<p>
Amet nulla facilisis, lobortis ex at, consequat diam. Pellentesque sed dui lorem.
Aliquam vel euismod nunc. Nulla facilisi. Donec consectetur faucibus rutrum.
Pellentesque ac ultricies sapien, ac iaculis erat. Vivamus posuere eget nulla sit amet
vehicula. Donec finibus maximus eros, at tincidunt ipsum vestibulum ac. Integer vel
metus vehicula, consequat velit a, eleifend mi. Curabitur erat mauris, luctus non dictum
vel, fringilla dignissim quam. Phasellus eleifend porta fermentum. Pellentesque posuere
massa vitae odio pulvinar feugiat. Fusce a risus sodales, maximus sapien sit amet,
pharetra ipsum. Vivamus varius eros ac sapien pulvinar, nec tincidunt dui bibendum.
Proin consectetur nibh tortor, nec vulputate ex posuere eget.
</p>
</div>
<div class="terms-content">
<h3>Disclaimer</h3>
<p>
Donec facilisis consequat nisi. Vivamus euismod at ipsum a gravida. Quisque vitae augue
maximus elit iaculis tincidunt. Quisque dapibus dui non justo iaculis volutpat.
Phasellus vulputate tempus lorem vitae vehicula. Maecenas interdum venenatis ante,
scelerisque porta nibh mollis vitae. Curabitur in erat porttitor, imperdiet lectus non,
porttitor odio. Donec efficitur efficitur dapibus. Aenean sit amet tortor id lorem
ultricies rhoncus. Etiam ornare eros eu commodo vehicula. Curabitur vel enim eget velit
tincidunt viverra eu in risus. Aliquam suscipit tellus eu fermentum facilisis.
Pellentesque volutpat posuere ligula. Fusce et consequat mi.
</p>
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

<div class="widget recent-post">
<h5 class="widget-title">Booking Tour</h5>
<div class="single-booking-link">
    <h6>Phone Number</h6>
    <p><a href="tel:+91 8802519000">+91 8802519000</a></p>
</div>
<div class="single-booking-link">
    <h6>Email Address</h6>
    <p><a href="mailto:info@indiatigersafari.in">info@indiatigersafari.in</a></p>
</div>
<div class="single-booking-link">
    <h6>Office Address</h6>
    <p>Ground Floor Shop K -1- 1316 Gali No 16, Sangam Vihar, New Delhi, 110080</p>
</div>

</div>

</aside>
</div>
</div>
</div>
</div>

@endsection