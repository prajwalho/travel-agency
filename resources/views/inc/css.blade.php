<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&display=swap" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/all.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/nav.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/flickity.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/slider.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />

<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/daterangepicker.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/toastr.min.css') }}">

<!-- Calendar -->
<style>
    .daterangepicker.show-calendar {
        background-color: #3c99dc;
    }

    .dropdown.dselect-wrapper .form-select {
        display: flex;
        align-items: center;
    }

    .dropdown.dselect-wrapper .dropdown-menu {
        width: 100%;
    }

    form input[name="subscribe_email"]::placeholder {
        font-weight: 400;
    }

    .icons__calender {
        position: absolute;
        right: 12px;
        top: 12px;
        content: "";
        font-size: 18px;
        color: #3c99dc;
    }
</style>

<!-- Tooltip -->
<style>
    .tooltip-inner {
        background-color: #0094de;
        opacity: 1 !important;
        color: #FFF;
        /* color: #1e1e1e; */
        font-weight: 400;
        padding: 8px 16px;
        max-width: 350px;
    }

    .tooltip.bs-tooltip-right .tooltip-arrow::before {
        border-right-color: #0094de !important;
    }

    .tooltip.bs-tooltip-left .tooltip-arrow::before {
        border-left-color: #0094de !important;
    }

    .tooltip.bs-tooltip-bottom .tooltip-arrow::before {
        border-bottom-color: #0094de !important;
    }

    .tooltip.bs-tooltip-top .tooltip-arrow::before {
        border-top-color: #0094de !important;
    }

    .tooltip.bs-tooltip-right .tooltip-arrow::after {
        border-right-color: #0094de !important;
    }

    .tooltip.bs-tooltip-left .tooltip-arrow::after {
        border-left-color: #0094de !important;
    }

    .tooltip.bs-tooltip-bottom .tooltip-arrow::after {
        border-bottom-color: #0094de !important;
    }

    .tooltip.bs-tooltip-top .tooltip-arrow::after {
        border-top-color: #0094de !important;
    }
</style>

@yield('css')
