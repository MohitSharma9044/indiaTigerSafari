<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title') - India Tiger Safari</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content>
<meta name="keywords" content>
@include('layouts.inc.head_links')
</head>
<body>



@include('layouts.inc.header')

<main class="main">

@yield('content')

</main>


@include('layouts.inc.footer')
@include('layouts.inc.foot_links')
@yield('scripts')
</body>
</html>