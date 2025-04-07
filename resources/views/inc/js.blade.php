<script src="{{ asset('js/library/jquery.min.js') }}"></script>
<script src="{{ asset('js/all.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/nav.js') }}"></script>
<script src="{{ asset('map/mapdata.js') }}"></script>
<script src="{{ asset('map/countrymap.js') }}"></script>
<script src="{{ asset('js/flickity.pkgd.min.js') }}"></script>
<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/script/script.js') }}"></script>

<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/daterangepicker.js') }}"></script>
<script src="{{ asset('js/spotlight.bundle.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>
<script>
    @if (Session::has('success'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        };
        toastr.success("{{ Session::get('success') }}");
    @endif
    @if (Session::has('info'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        };
        toastr.info("{{ Session::get('info') }}");
    @endif
    @if (Session::has('warning'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        };
        toastr.warning("{{ Session::get('warning') }}");
    @endif
    @if (Session::has('error'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        };
        toastr.error("{{ Session::get('error') }}");
    @endif
</script>
<script>
    $(document).ready(function() {
        $('[data-bs-toggle="tooltip"]').tooltip();

        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
    });
</script>

<script>
    window.onscroll = function() {
        const left = document.getElementById("header");
        if (left.scrollTop > 150 || self.pageYOffset > 0) {
            left.classList.add("sticky");
        } else {
            left.classList.remove("sticky");
        }
    };
</script>

<script>
    jQuery(document).ready(function($) {
        $(".pkg-slider").owlCarousel({
            loop: true,
            items: 3,
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 1000,
            dots: true,
            pagination: false,
            margin: 20,
            autoHeight: false,
            stagePadding: 0,
            nav: false,
            navText: false,
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 0,
                },
                576: {
                    items: 2,
                    stagePadding: 0,
                },
                768: {
                    items: 3,
                    stagePadding: 0,
                },
                1170: {
                    items: 3,
                },
            },
        });
    });

    jQuery(document).ready(function($) {
        $(".testi-slider").owlCarousel({
            loop: true,
            items: 1,
            autoplay: true,
            autoplayTimeout: 8000,
            smartSpeed: 3000,
            dots: true,
            pagination: false,
            margin: 20,
            autoHeight: false,
            stagePadding: 0,
            nav: true,
            navText: [
                '<i class="bi bi-chevron-left"></i>',
                '<i class="bi bi-chevron-right"></i>',
            ],
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 0,
                },
                768: {
                    items: 1,
                    stagePadding: 0,
                },
                1170: {
                    items: 1,
                },
            },
        });
    });
</script>

<script>
    var swiper = new Swiper(".swiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 3,
            slideShadows: true,
        },
        keyboard: {
            enabled: true,
        },
        mousewheel: {
            thresholdDelta: 70,
        },
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 1,
            },
            1024: {
                slidesPerView: 2,
            },
            1560: {
                slidesPerView: 3,
            },
        },
    });
</script>

<script>
    const items = document.querySelectorAll(".accordion button");

    function toggleAccordion() {
        const itemToggle = this.getAttribute("aria-expanded");

        for (i = 0; i < items.length; i++) {
            items[i].setAttribute("aria-expanded", "false");
        }

        if (itemToggle == "false") {
            this.setAttribute("aria-expanded", "true");
        }
    }

    items.forEach((item) => item.addEventListener("click", toggleAccordion));
</script>

@yield('js')
