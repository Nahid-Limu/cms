<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @if(View::hasSection('title'))
            @yield('title')
        @else
            CMS
        @endif
    </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img').'/'.'title-logo.png' }}" />

    @include('includes.css')
    @yield('extra_css')
</head>

<body>
    <div class="page-wrapper chiller-theme toggled">
        @include('includes.sidebar')
        
        <main class="page-content">
            @include('includes.header_topbar')
            <div class="container-fluid">
                @yield('content')
            </div>
            @include('includes.footer')
        </main>

    </div>
    @include('includes.js')
    @yield('extra_js')
</body>

</html>