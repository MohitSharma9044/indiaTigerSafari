<header class="header">

<div class="header-top">
<div class="container">
<div class="header-top-wrapper">
<div class="header-top-left">
<div class="header-top-contact">
<ul>
<li><a href="mailto:info@indiatigersafari.in"><i class="far fa-envelope-open"></i>info@indiatigersafari.in</a></li>
<li><a href="tel:+91 8802519000"><i class="far fa-headset"></i>+91 8802519000</a></li>
</ul>
</div>
</div>
<div class="header-top-right">
<div class="header-top-social">
<a href="https://api.whatsapp.com/send?phone=8802519000"><i class="fab fa-whatsapp"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="main-navigation">
<nav class="navbar navbar-expand-lg">
<div class="container">
<a class="navbar-brand" href="{{ url('/') }}">
<img src="{{ asset('storage/uploads/admin/settings/general/'.getWebsiteLogo()) }}" alt="{{ config('app.name') }}">
</a>
<div class="mobile-menu-right">
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"><i class="far fa-stream"></i></span>
</button>
</div>
<div class="collapse navbar-collapse" id="main_nav">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link active" href="{{ url('/') }}">Home</a>
</li>
<li class="nav-item"><a class="nav-link" href="{{ url('/about-us') }}">About Us</a></li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown">National Park & Safari</a>
<ul class="dropdown-menu fade-up">
<li><a class="dropdown-item" href="ranthambore-national-park.php">Ranthambore National Park</a></li>
<li><a class="dropdown-item" href="corbett-national-park.php">Corbett National Park</a></li>
<li><a class="dropdown-item" href="kanha-national-park.php">Kanha National Park</a></li>

</ul>
</li>

<li class="nav-item"><a class="nav-link" href="{{ url('/our-package') }}">Our Package</a></li>
<li class="nav-item"><a class="nav-link" href="{{ url('/contact-us') }}">Contact Us</a></li>
</ul>
<div class="header-nav-right">
<div class="header-btn">
<a href="{{ url('/pay-now') }}" class="theme-btn">Pay Now<i class="far fa-arrow-right"></i></a>
</div>
</div>
</div>
</div>
</nav>
</div>
</header>