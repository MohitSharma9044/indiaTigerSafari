<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin:: @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('admin.layouts.inc.head_links')
    @yield('styles')
</head>
<body>
    <div class="layout">
        <div class="vertical-layout">
            <!-- Header START -->
           @include('admin.layouts.inc.header')   
            <!-- Header END -->

            <!-- Side Nav START -->
            @include('admin.layouts.inc.sidebar')
            <!-- Side Nav END -->

            <!-- Content START -->
            <div class="content">
                <div class="main">
                    @yield('content')
                </div>
                <!-- Footer START -->
                @include('admin.layouts.inc.footer')
                <!-- Footer End -->
            </div>
            <!-- Content END -->
        </div>
    </div>
    <!-- Core Vendors JS -->
    @include('admin.layouts.inc.foot_links')
    @yield('scripts')
</body>
</html>