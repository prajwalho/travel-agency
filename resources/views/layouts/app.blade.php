<!DOCTYPE html>
<html lang="en">
<!-- head -->
@include('inc.head')

<body>
    <!-- top_header -->
    {{-- @include('inc.top_header') --}}

    <!-- header -->
    @include('inc.header')

    <!-- content -->
    @if (isset($page) && $page)
        @php
            $viewName = 'pages.' . $page->slug;
            $defaultViewName = 'pages.default'; // Change 'default' to your default page's slug
        @endphp

        @if (View::exists($viewName))
            @include($viewName)
        @else
            @include($defaultViewName)
        @endif
    @else
        @yield('content')
    @endif

    <!-- footer -->
    @include('inc.footer')

    <!-- overlay -->
    @include('inc.overlay')

    <!-- share -->
    @include('inc.share')

    <!-- js -->
    @include('inc.js')
</body>

</html>
