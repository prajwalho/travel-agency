
    // daterangepicker
    $(document).ready(function () {
        $('.startDate').daterangepicker({
        singleDatePicker: true,
        startDate: moment().subtract(6, 'days')
        });
    });
    

    // daterangepicker
    window.onscroll = function () {
        myFunction();
        functionclass();
    };

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("stickys");
            $(".navbar-control").hide();
        } else {
            $(".navbar-control").show();
            header.classList.remove("stickys");
        }
    }

    const sections = document.querySelectorAll(".tap-section");
    const navLi = document.querySelectorAll(".tripdetails__header .nav-link");

    function functionclass() {
        var current = "";

        sections.forEach((section) = function (section) {
            const sectionTop = section.offsetTop;
            if (pageYOffset >= sectionTop - 100) {
                current = section.getAttribute("id");
            }
        });
        console.log(navLi);
        navLi.forEach((a) = function (a) {
            console.log(a);
            a.classList.remove("active");
            if (a.classList.contains(current)) {
                a.classList.add("active");
            }
        });
    };

    $(document).on('click', '.tripdetails__header .nav-link', function () {
        var str = $(this).attr('href');
        $('html,body').animate({
            scrollTop: $(str).offset().top - 100
        }, 500);
    });


    $(document).on('click', '.tabs-detail .nav-link', function () {
        var str = $(this).attr('href');
        $('html,body').animate({
            scrollTop: $(str).offset().top - 100
        }, 500);
    });


    // faq_details
    let faqs = $(".faq_details");
    $(".faq_title").click(function () {
        faqs.slideUp();
        faqs.prev().removeClass("active");
        $(this).next().slideDown();
        $(this).addClass("active");
        return false;
    });


    // Fancybox Config
    $('[data-fancybox="gallery"]').fancybox({
    buttons: [
      "slideShow",
      "thumbs",
      "zoom",
      "fullScreen",
      "share",
      "close"
    ],
    loop: false,
    protect: true
  });
