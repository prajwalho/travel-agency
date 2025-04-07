<head>
    <title>@yield('meta_title', $meta_title ?? (isset($title) && $title ? $title : config('app.name')))</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="@yield('meta_description', $meta_description ?? '')" />
    <meta name="keywords" content="@yield('meta_keywords', $meta_keywords ?? '')">
    @yield('meta')

    @if (!isset($trip) && !isset($page) && !isset($blog))
        <!-- Open Graph data -->
        <meta property="og:title" content="{{ $meta_title ?? '' }}" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:description" content="{{ $meta_description ?? '' }}" />
        <meta property="og:site_name" content="{{ config('app.name') }}" />
    @endif

    @php
        $fav_icon = Setting::get('fav_icon');
    @endphp
    @if ($fav_icon && file_exists(public_path($fav_icon)))
        <link rel="icon" type="image/x-icon" href="{{ asset($fav_icon) }}" />
    @else
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/icons/favicon.png') }}" />
    @endif

    @include('inc.css')
</head>
