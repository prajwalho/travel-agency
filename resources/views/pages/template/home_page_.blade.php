<!DOCTYPE html>
<html lang="en">

<head>
    <title>holidaymakernepal</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/icons/favicon.png') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
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

</head>

<body>

    <!-- header -->
    <header id="header">
        <div class="overlay-slider"></div>
        <div class="main_header_area animated header-container">
            <div class="clearfix">
                <nav id="navigation1" class="navigation">
                    <div class="container">
                        <div class="nav-header">
                            <div class="logo-widget">
                                <a class="nav-brand" href="#">
                                    <img src="{{ asset('assets/images/nhm-white-logo.png') }}" alt="" />
                                </a>
                            </div>

                            <div class="nav-toggle"></div>

                        </div>

                        <div class="nav-menus-wrapper main-nav">
                            <ul class="nav-menu align-to-right">
                                <li><a href="#">about us</a></li>
                                <li><a href="#">destination</a>
                                    <ul class="nav-dropdown">
                                        <li>
                                            <a href="#">Menu Level 2</a>
                                            <ul class="nav-dropdown">
                                                <li><a href="#" target="_blank">Menu Level 2</a></li>
                                                <li><a href="#" target="_blank">Menu Level 2</a></li>
                                                <li><a href="#" target="_blank">Menu Level 2</a></li>
                                                <li><a href="#" target="_blank">Menu Level 2</a></li>
                                                <li><a href="#" target="_blank">Menu Level 2</a></li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Menu Level 2</a>
                                            <ul class="nav-dropdown">
                                                <li>
                                                    <a href="#">Menu Level 3</a>
                                                    <ul class="nav-dropdown">
                                                        <li><a href="#" target="_blank">Menu Level 2</a></li>
                                                        <li><a href="#" target="_blank">Menu Level 2</a></li>
                                                        <li><a href="#" target="_blank">Menu Level 2</a></li>
                                                        <li><a href="#" target="_blank">Menu Level 2</a></li>
                                                        <li><a href="#" target="_blank">Menu Level 2</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" target="_blank">Menu Level 2</a></li>
                                                <li><a href="#" target="_blank">Menu Level 2</a></li>
                                                <li><a href="#" target="_blank">Menu Level 2</a></li>
                                                <li><a href="#" target="_blank">Menu Level 2</a></li>
                                                <li><a href="#" target="_blank">Menu Level 2</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Menu Level 2</a>
                                            <ul class="nav-dropdown">
                                                <li><a href="#" target="_blank">Menu Level 2</a></li>
                                                <li><a href="#" target="_blank">Menu Level 2</a></li>
                                                <li><a href="#" target="_blank">Menu Level 2</a></li>
                                                <li><a href="#" target="_blank">Menu Level 2</a></li>
                                                <li><a href="#" target="_blank">Menu Level 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#" target="_blank">Menu Level 2</a></li>
                                        <li><a href="#" target="_blank">Menu Level 2</a></li>
                                        <li><a href="#" target="_blank">Menu Level 2</a></li>
                                        <li><a href="#" target="_blank">Menu Level 2</a></li>
                                        <li><a href="#" target="_blank">Menu Level 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">explore nepal</a></li>
                                <li><a href="#">experience</a></li>
                                <li><a href="#">best deals</a></li>
                                <li><a href="#">travel info</a></li>
                            </ul>

                            <div class="navbar-icons-2">
                                <div class="searchbar-open">
                                    <div class="openBtn" onclick="openSearch()"><i
                                            class="fa-solid fa-magnifying-glass"></i></div>
                                </div>
                                <div class="user-dropdown-icon">
                                    <div class="searchbar-open">
                                        <a href="" class=""> <i class="fa-solid fa-user"></i>&nbsp;
                                            login </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- slider -->
    <div class="hero-slider" data-carousel>
        <div class="carousel-cell" style="background-image: url({{ asset('assets/images/slider.png') }})">
            <div class="slide-content">
                <div class="mask">

                    <h2 class="title">
                        Experience Nepal Like
                        <br />
                        Never Before
                    </h2>
                </div>
                <div class="divider"></div>
                <div class="mask">
                    <a href="" target="_blank" class="btn">explore more</a>
                </div>
            </div>
        </div>
        <div class="carousel-cell" style="background-image: url({{ asset('assets/images/slider-1.png') }})">
            <div class="slide-content">
                <div class="mask">

                    <h2 class="title">
                        Experience Nepal Like
                        <br />
                        Never Before
                    </h2>
                </div>
                <div class="divider"></div>
                <div class="mask">
                    <a href="" target="_blank" class="btn">explore more</a>
                </div>
            </div>
        </div>

        <div class="carousel-cell" style="background-image: url({{ asset('assets/images/slider-2.png') }})">
            <div class="slide-content">
                <div class="mask">
                    <h2 class="title">
                        Experience Nepal Like
                        <br />
                        Never Before
                    </h2>
                </div>
                <div class="divider"></div>
                <div class="mask">
                    <a href="" target="_blank" class="btn">explore more</a>
                </div>

            </div>
        </div>
    </div>

    <!-- trips -->
    <section class="pt-50 pb-50">
        <div class="container">
            <div class="special-wrapper">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 d-none d-sm-none d-md-block">
                        <div class="img-card mt-20">
                            <a href="">
                                <div class="imgBox">
                                    <picture>
                                        <img class="img-fluid" src="{{ asset('assets/images/holi-fev.jpg') }}">
                                    </picture>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="mt-20 ps-40">
                            <div class="tit__sm">Experience Nepal Like Never Before</div>
                            <div class="title-widget">
                                <h1>things to do in <span>march</span></h1>
                            </div>

                            <div class="paragraph-content mt-20">

                                <p>
                                    Duis laoreet et nibh vel facilisis.quis Mauris laoreet mi vel mollis scelerisque.
                                    Donec venenatis dictum risus, nec dictum leo tincidunt et. Nunc quis magna aliquam,
                                    laoreet mi ut, mollis magna. In ultricies quam a lacus bibendum egestas quis ut
                                    lacus. Ut ornare tellus in metus rutrum molestie.
                                </p>

                                <p>
                                    Nunc porta cursus libero eu sodales. Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Proin non neque auctor, luctus metus eget, porttitor odio. Donec
                                    iaculis aliquet nunc sit amet lacinia. Maecenas cursus vitae mauris at venenatis.
                                    arcu lacinia condimentum
                                </p>
                            </div>

                            <!-- <div class="lists mt-20">
                    
                    <ul>
                      <li>Start Early: Beginning the hike in the morning gave me plenty of time to enjoy the journey and return before sunset.</li>
                      <li>Pack Smart: I carried water, some snacks, and a light jacket—it gets chilly at the top!</li>
                      <li>Take Your Time: The hike is moderately challenging, so pace yourself and enjoy the surroundings.</li>
                    </ul>
                  </div> -->

                            <a href="" class="btn custom-btn mt-20">Explore now <span><i
                                        class="bi bi-arrow-return-left"></i></span></a>

                        </div>
                    </div>

                </div>
            </div>

            <div class="pkg-container mt-30">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="container-card mt-20">
                            <a href="#">
                                <div class="card-box">
                                    <div class="imgBox img280">
                                        <picture>
                                            <img class="img-fluid"
                                                src="{{ asset('assets/images/Pashupatinath.jpg') }}" />
                                        </picture>

                                        <div class="vector"></div>
                                    </div>

                                </div>

                                <div class="sub-tittle bg-white">
                                    <h6>
                                        shivratri packages
                                    </h6>
                                    <div class="paragraph-content mt-10">
                                        <div class="package-info">
                                            <h5><span>$180</span>/Per Person</h5>
                                            <h5><i class="bi bi-calendar2-check"></i> 5 Days/6 night</h5>
                                        </div>
                                        <!-- <p>
                        Lorem ipsum dolor amet consectetur adipiscing sed do eiusmod tempor incididunt.
                      </p> -->
                                    </div>

                                    <!-- <a href="" class="btn custom-btn mt-20">more<span><i class="fa-solid fa-arrow-right"></i></span></a> -->
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="container-card mt-20">
                            <a href="#">
                                <div class="card-box">
                                    <div class="imgBox img280">
                                        <picture>
                                            <img class="img-fluid"
                                                src="{{ asset('assets/images/event_1528086448m2.jpg') }}" />
                                        </picture>

                                        <div class="vector"></div>
                                    </div>

                                </div>

                                <div class="sub-tittle bg-white">
                                    <h6>
                                        tamu lochar pacakges
                                    </h6>
                                    <div class="paragraph-content mt-10">
                                        <div class="package-info">
                                            <h5><span>$180</span>/Per Person</h5>
                                            <h5><i class="bi bi-calendar2-check"></i> 5 Days/6 night</h5>
                                        </div>

                                    </div>


                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="container-card mt-20">
                            <a href="#">
                                <div class="card-box">
                                    <div class="imgBox img280">
                                        <picture>
                                            <img class="img-fluid"
                                                src="{{ asset('assets/images/9-days-nepal-tour.webp') }}" />
                                        </picture>

                                        <div class="vector"></div>
                                    </div>

                                </div>

                                <div class="sub-tittle bg-white">
                                    <h6>
                                        Culture packgaes
                                    </h6>
                                    <div class="paragraph-content mt-10">
                                        <div class="package-info">
                                            <h5><span>$180</span>/Per Person</h5>
                                            <h5><i class="bi bi-calendar2-check"></i> 5 Days/6 night</h5>
                                        </div>

                                    </div>


                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="container-card mt-20">
                            <a href="#">
                                <div class="card-box">
                                    <div class="imgBox img280">
                                        <picture>
                                            <img class="img-fluid" src="{{ asset('assets/images/holi-fev.jpg') }}" />
                                        </picture>

                                        <div class="vector"></div>
                                    </div>

                                </div>

                                <div class="sub-tittle bg-white">
                                    <h6>
                                        holi tour packages
                                    </h6>
                                    <div class="paragraph-content mt-10">
                                        <div class="package-info">
                                            <h5><span>$180</span>/Per Person</h5>
                                            <h5><i class="bi bi-calendar2-check"></i> 5 Days/6 night</h5>
                                        </div>

                                    </div>


                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- nepal trips -->
    <section class="section-content web-bg-light">
        <div class="container">
            <div id="map"></div>
        </div>
    </section>

    <!-- about -->
    <section class="section-content about-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6">
                    <div>
                        <div class="tit__sm">about us</div>
                        <div class="title-widget">
                            <h2>Experience Nepal Like
                                <br>
                                Never Before
                            </h2>
                        </div>

                        <div class="content mt-20">
                            <p>
                                Making memories and taking in new cultures are the two main goals of travel. NHM is
                                dedicated to giving travellers an extraordinary, once-in-a-lifetime travel experience.
                                Get the most out of your money by taking part in some of the fun, adventurous,
                                colourful, cultural, and leisurely vacations. NHM specialises in creating customised
                                holiday and travel experiences for those that demand more, turning your trip fantasies
                                into reality.
                            </p>
                        </div>
                        <a href="" class="btn custom-btn mt-20">Read More<span><i
                                    class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-5 offset-md-1">
                    <div class="img-card mt-20">
                        <a href="">
                            <div class="imgBox">
                                <picture>
                                    <img class="" src="{{ asset('assets/images/about-img.png') }}">
                                </picture>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- experience -->
    <section class="section-content">
        <div class="container">
            <div class="text-center">
                <div class="tit__sm">Experience Nepal Like Never Before</div>
                <div class="title-widget">
                    <h3>Experience packages</h3>
                </div>
            </div>

            <div class="owl-carousel owl-theme service-slider">
                <div class="container-card mt-20">
                    <a href="#">
                        <div class="card-box">
                            <div class="imgBox img310">
                                <picture>
                                    <img class="img-fluid"
                                        src="{{ asset('assets/images/muktinath-tour-package.webp') }}" />
                                </picture>

                            </div>

                        </div>

                        <div class="sub-tittle bg-white">
                            <span>Duration: 10 Days</span>
                            <h5> Muktinath Yatra Tour Packages </h5>
                            <div class="paragraph-content mt-10">
                                <div class="package-info">
                                    <h5> <span>$180</span>/Per Person</h5>
                                    <h5><i class="bi bi-person-plus"></i> 4.5</h5>
                                </div>

                            </div>


                        </div>
                    </a>
                </div>

                <div class="container-card mt-20">
                    <a href="#">
                        <div class="card-box">
                            <div class="imgBox img310">
                                <picture>
                                    <img class="img-fluid"
                                        src="{{ asset('assets/images/7-nights-8-days-nepal-tour.webp') }}" />
                                </picture>

                            </div>

                        </div>

                        <div class="sub-tittle bg-white">
                            <span>Duration: 10 Days</span>
                            <h5> Pokhara tour </h5>
                            <div class="paragraph-content mt-10">
                                <div class="package-info">
                                    <h5> <span>$180</span>/Per Person</h5>
                                    <h5><i class="fa-solid fa-star" style="color: #EC4040;"></i> 4.5</h5>
                                </div>

                            </div>


                        </div>
                    </a>
                </div>

                <div class="container-card mt-20">
                    <a href="#">
                        <div class="card-box">
                            <div class="imgBox img310">
                                <picture>
                                    <img class="img-fluid" src="{{ asset('assets/images/7.PNG') }}" />
                                </picture>

                            </div>

                        </div>

                        <div class="sub-tittle bg-white">
                            <span>Duration: 10 Days</span>
                            <h5> Nepal Highlight Tour  </h5>
                            <div class="paragraph-content mt-10">
                                <div class="package-info">
                                    <h5> <span>$180</span>/Per Person</h5>
                                    <h5><i class="fa-solid fa-star" style="color: #EC4040;"></i> 4.5</h5>
                                </div>

                            </div>


                        </div>
                    </a>
                </div>

                <div class="container-card mt-20">
                    <a href="#">
                        <div class="card-box">
                            <div class="imgBox img310">
                                <picture>
                                    <img class="img-fluid"
                                        src="{{ asset('assets/images/5-nights-6-days-nepal-tour.webp') }}" />
                                </picture>

                            </div>

                        </div>

                        <div class="sub-tittle bg-white">
                            <span>Duration: 10 Days</span>
                            <h5>Chitwan tours</h5>
                            <div class="paragraph-content mt-10">
                                <div class="package-info">
                                    <h5> <span>$180</span>/Per Person</h5>
                                    <h5><i class="fa-solid fa-star" style="color: #EC4040;"></i> 4.5</h5>
                                </div>

                            </div>


                        </div>
                    </a>
                </div>


                <div class="container-card mt-20">
                    <a href="#">
                        <div class="card-box">
                            <div class="imgBox img310">
                                <picture>
                                    <img class="img-fluid"
                                        src="{{ asset('assets/images/10-day-nepal-luxury-tour.webp') }}" />
                                </picture>

                            </div>

                        </div>

                        <div class="sub-tittle bg-white">
                            <span>Duration: 10 Days</span>
                            <h5>Lumbini tours</h5>
                            <div class="paragraph-content mt-10">
                                <div class="package-info">
                                    <h5> <span>$180</span>/Per Person</h5>
                                    <h5><i class="fa-solid fa-star" style="color: #EC4040;"></i> 4.5</h5>
                                </div>

                            </div>


                        </div>
                    </a>
                </div>

            </div>

            <div class="btn-block text-center mt-30">
                <a href="" class="btn outlinebtn"> view all packages <span><i
                            class="fa-solid fa-chevron-right"></i></span></a>
            </div>

        </div>
    </section>

    <!-- testimonials -->
    <section class="section-content testi-section">
        <div class="container">
            <div class="wrapper-container">

                <div class="owl-carousel owl-theme testi-slider mt-20">
                    <div class="bg-box mt-20">
                        <div class="container-testi clearfix">
                            <div class="quote-icon"> <span><i class="fa-solid fa-quote-right"></i></span></div>
                            <div class="client-info pt-20">
                                <p>
                                    Making memories and taking in new cultures are the two main goals of travel. NHM is
                                    dedicated to giving travellers an extraordinary, once-in-a-lifetime travel
                                </p>

                            </div>
                            <div class="d-flex align-items-center mt-30">
                                <div class="t-img-box">
                                    <img src="{{ asset('assets/images/Ellipse_7.png') }}" alt="" />

                                </div>
                                <div class="ms-3">
                                    <h6>james k loines</h6>
                                    <small>traveller</small>
                                </div>
                            </div>



                        </div>
                    </div>

                    <div class="bg-box mt-20">
                        <div class="container-testi clearfix">
                            <div class="quote-icon"> <span><i class="fa-solid fa-quote-right"></i></span></div>
                            <div class="client-info pt-20">
                                <p>
                                    Making memories and taking in new cultures are the two main goals of travel. NHM is
                                    dedicated to giving travellers an extraordinary, once-in-a-lifetime travel
                                </p>

                            </div>
                            <div class="d-flex align-items-center mt-30">
                                <div class="t-img-box">
                                    <img src="{{ asset('assets/images/Ellipse_7.png') }}" alt="" />

                                </div>
                                <div class="ms-3">
                                    <h6>james k loines</h6>
                                    <small>traveller</small>
                                </div>
                            </div>



                        </div>
                    </div>


                    <div class="bg-box mt-20">
                        <div class="container-testi clearfix">
                            <div class="quote-icon"> <span><i class="fa-solid fa-quote-right"></i></span></div>
                            <div class="client-info pt-20">
                                <p>
                                    Making memories and taking in new cultures are the two main goals of travel. NHM is
                                    dedicated to giving travellers an extraordinary, once-in-a-lifetime travel
                                </p>

                            </div>
                            <div class="d-flex align-items-center mt-30">
                                <div class="t-img-box">
                                    <img src="{{ asset('assets/images/Ellipse_7.png') }}" alt="" />

                                </div>
                                <div class="ms-3">
                                    <h6>james k loines</h6>
                                    <small>traveller</small>
                                </div>
                            </div>



                        </div>
                    </div>

                    <div class="bg-box mt-20">
                        <div class="container-testi clearfix">
                            <div class="quote-icon"> <span><i class="fa-solid fa-quote-right"></i></span></div>
                            <div class="client-info pt-20">
                                <p>
                                    Making memories and taking in new cultures are the two main goals of travel. NHM is
                                    dedicated to giving travellers an extraordinary, once-in-a-lifetime travel
                                </p>

                            </div>
                            <div class="d-flex align-items-center mt-30">
                                <div class="t-img-box">
                                    <img src="{{ asset('assets/images/Ellipse_7.png') }}" alt="" />

                                </div>
                                <div class="ms-3">
                                    <h6>james k loines</h6>
                                    <small>traveller</small>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- blog -->
    <section class="section-content">
        <div class="container">
            <div class="text-center">
                <div class="tit__sm">Checkout latest news and articles from our blog</div>
                <div class="title-widget">
                    <h4>Travel Blog</h4>
                </div>
            </div>

            <div class="row">

                <div class="col-12 col-xs-6 col-md-4">
                    <div class="container-card mt-20">
                        <a href="#">
                            <div class="card-box">
                                <div class="imgBox img310">
                                    <picture>
                                        <img class="img-fluid"
                                            src="{{ asset('assets/images/3-nights-4-days-nepal-tour.webp') }}" />
                                    </picture>

                                </div>

                            </div>

                            <div class="sub-tittle bg-white">

                                <h5>Things to Keep in Mind While Travelling During a Pandemic.</h5>
                                <div class="paragraph-content mt-10">
                                    <div class="package-info">
                                        <h5><i class="bi bi-calendar2-check"></i> March 18, 2025</h5>
                                        <h5><i class="bi bi-person-plus"></i> by admin</h5>
                                    </div>

                                    <a href="" class="btn-read mt-20"> continue reading <span><i
                                                class="fa-solid fa-chevron-right"></i></span></a>

                                </div>


                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-xs-6 col-md-4">
                    <div class="container-card mt-20">
                        <a href="#">
                            <div class="card-box">
                                <div class="imgBox img310">
                                    <picture>
                                        <img class="img-fluid"
                                            src="{{ asset('assets/images/muktinath-tour-package.webp') }}" />
                                    </picture>

                                </div>

                            </div>

                            <div class="sub-tittle bg-white">

                                <h5>Things to Keep in Mind While Travelling During a Pandemic.</h5>
                                <div class="paragraph-content mt-10">
                                    <div class="package-info">
                                        <h5><i class="bi bi-calendar2-check"></i> March 18, 2025</h5>
                                        <h5><i class="bi bi-person-plus"></i> by admin</h5>
                                    </div>

                                    <a href="" class="btn-read mt-20"> continue reading <span><i
                                                class="fa-solid fa-chevron-right"></i></span></a>

                                </div>


                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-xs-6 col-md-4">
                    <div class="container-card mt-20">
                        <a href="#">
                            <div class="card-box">
                                <div class="imgBox img310">
                                    <picture>
                                        <img class="img-fluid" src="{{ asset('assets/images/7.PNG') }}" />
                                    </picture>

                                </div>

                            </div>

                            <div class="sub-tittle bg-white">

                                <h5>Things to Keep in Mind While Travelling During a Pandemic.</h5>
                                <div class="paragraph-content mt-10">
                                    <div class="package-info">
                                        <h5><i class="bi bi-calendar2-check"></i> March 18, 2025</h5>
                                        <h5><i class="bi bi-person-plus"></i> by admin</h5>
                                    </div>

                                    <a href="" class="btn-read mt-20"> continue reading <span><i
                                                class="fa-solid fa-chevron-right"></i></span></a>

                                </div>


                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- customize -->
    <div class="customize-cover">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-sm-7 col-md-8">
                    <div class="">

                        <div class="tit__sm text-white">Checkout latest news and articles from our blog</div>
                        <div class="title-widget">
                            <h4 class="text-white">We create journeys for the excited traveler</h4>
                        </div>

                        <a href="" class="text-decoration-none">
                            <h5 class="text-white text-uppercase mt-20">— Customize Trip —</h5>
                        </a>
                        <div class="btn-group my-4">
                            <a href="" class="btn btn-outline-light" aria-current="page"><i
                                    class="fas fa-file-download me-2"></i> Customize Trip</a>

                        </div>

                    </div>
                </div>
                <div class="col-12 col-sm-5 col-md-4">
                    <div class="img-card mt-20">
                        <a href="">
                            <div class="imgBox">
                                <picture>
                                    <img class="" src="{{ asset('assets/images/img-1.png') }}">
                                </picture>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- footer -->
    <footer class="pt-30">
        <div class="container">
            <div class="footer-widget">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="footer-info mt-20">
                            <h3 class="footer__tittle mb-20">Our Affiliations</h3>
                            <ul class="affiliation">
                                <li><img src="{{ asset('assets/images/Frame_36008.png') }}" alt="" /></li>
                                <li><img src="{{ asset('assets/images/Frame_36009.png') }}" alt="" /></li>
                                <li><img src="{{ asset('assets/images/Frame_36010.png') }}" alt="" /></li>
                                <li><img src="{{ asset('assets/images/Frame_36011.png') }}" alt="" /></li>
                                <li><img src="{{ asset('assets/images/Frame_36012.png') }}" alt="" /></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="footer-info mt-20">
                            <h6 class="footer__tittle mb-10">Get latest news</h6>
                            <div class="subscribe-from">
                                <div class="subscribe clearfix">
                                    <input class="form-control mt-10" name="email" placeholder="Email Address"
                                        required="" type="email">
                                    <button class="btn mt-10" type="submit">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="footer-inner mt-30">
                <div class="line-bg"></div>

                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="footer-info mt-20">
                            <h6>24/7 Support</h6>
                            <small>Need help? Call us, we’re at your service</small>

                            <div class="footer-info mt-20">
                                <div class="cont-info clearfix mb-3">
                                    <div class="cnt-icon"> <span><i class="fa-solid fa-location-dot"></i></span>
                                    </div>
                                    <div class="cnt-text ">
                                        <span class="cnt-title mb-1 ">Address:</span>
                                        <span>Durbarmarg, Kathmandu</span>
                                    </div>
                                </div>
                                <div class="cont-info clearfix mb-3 ">
                                    <div class="cnt-icon "> <span><i class="fa-solid fa-phone"></i> </span> </div>
                                    <div class="cnt-text ">
                                        <span class="cnt-title mb-1">Call Us:</span>
                                        <span>+977 9801088922</span>
                                    </div>
                                </div>
                                <div class="cont-info clearfix mb-3 ">
                                    <div class="cnt-icon "> <span><i class="fa-solid fa-envelope"></i></span> </div>
                                    <div class="cnt-text">
                                        <span class="cnt-title mb-1 ">Email us:</span>
                                        <span>info@holidaymakernepal.com.np</span>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="footer-info mt-20">
                            <h6 class="footer__tittle mb-10">Travel Information</h6>
                            <ul class="listing">
                                <li><a href="#"> Travel And Trekking Insurance</a></li>
                                <li><a href="#">Nepal Tourist Visa</a></li>
                                <li><a href="#">Trekking Equipment</a></li>
                                <li><a href="#">Nepal Trekking List</a></li>
                                <li><a href="#">Nepal Trekking Item</a></li>
                                <li><a href="#">Weather and Trekking Season in Nepal</a></li>
                                <li><a href="#">Group and Private Trip Nepal</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="footer-info mt-20">
                            <h6 class="footer__tittle mb-10">Quick Explore</h6>
                            <ul class="listing">
                                <li><a href="#">Travel Guides</a></li>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Travel Deals</a></li>
                                <li><a href="#">Photos</a></li>
                                <li><a href="#">Videos</a></li>
                                <li><a href="#">Client Reviews</a></li>
                                <li><a href="#">Write a Review</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="footer-info mt-20">
                            <h6 class="footer__tittle mb-10">we accept</h6>
                            <ul class="affiliation">
                                <li><img src="{{ asset('assets/images/Vector.png') }}" alt="" /></li>
                                <li><img src="{{ asset('assets/images/Group.png') }}" alt="" /></li>
                                <li><img src="{{ asset('assets/images/Group-4.png') }}" alt="" /></li>
                                <li><img src="{{ asset('assets/images/Group-1.png') }}" alt="" /></li>

                            </ul>
                        </div>

                    </div>
                </div>

                <div class="line-bg"></div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="cpy-info text-center">
                    <p>©2025, Nepal Holiday Maker Pvt. Ltd. All Rights Reserved.<a href="">web creation
                            nepal</a></p>

                    <p>
                        <small>All contents and photographs within this website is copyright by Trekking Planner Pvt.
                            Ltd., and may not be reproduced
                            without our permission. All Rights Reserved.</small>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <div id="myOverlay" class="overlay">
        <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
        <div class="overlay-content">
            <div class="container">
                <form action="/action_page.php">
                    <div class="search-form d-flex mb-10">
                        <input type="text" placeholder="Search here..." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                    <p>Type above and press Enter to search. Press Close to cancel.</p>
                </form>


            </div>
        </div>
    </div>

    <div class="shareit">
        <!-- facebook -->
        <a class="facebook" href="" target="blank" title="facebook"><i
                class="fa-brands fa-facebook-f"></i></a>

        <!-- instagram -->
        <a class="instagram" href="" target="blank" title="instagram"><i class="fab fa-instagram"></i></a>

        <!-- youtube -->
        <a class="youtube" href="" target="blank" title="youtube"><i class="fab fa-youtube"></i></a>


    </div>

    <script src="{{ asset('js/library/jquery.min.js') }}"></script>
    <script src="{{ asset('js/all.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/nav.js') }}"></script>

    <script src="{{ asset('map/mapdata.js') }}"></script>
    <script src="{{ asset('map/countrymap.js') }}"></script>

    <script src="{{ asset('js/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('./js/script/script.js') }}"></script>

    <script>
        window.onscroll = function() {
            const left = document.getElementById("header");
            if (left.scrollTop > 150 || self.pageYOffset > 0) {
                left.classList.add("sticky");
            } else {
                left.classList.remove("sticky");
            }
        };
        var options = {
            accessibility: true,
            prevNextButtons: true,
            pageDots: true,
            setGallerySize: false,
            arrowShape: {
                x0: 10,
                x1: 60,
                y1: 50,
                x2: 60,
                y2: 45,
                x3: 15,
            },
        };

        var $carousel = $("[data-carousel]").flickity(options);
        var $slideContent = $(".slide-content");
        var flkty = $carousel.data("flickity");
        var selectedSlide = flkty.selectedElement;

        flkty.on("settle", function(index) {
            selectedSlide = flkty.selectedElement;
        });

        flkty.on("change", function(index) {
            $slideContent.eq(index).removeClass("mask");

            setTimeout(function() {
                $slideContent.addClass("mask");
            }, 500);
        });

        flkty.on("dragStart", function(event) {
            var index = 0;
            selectedSlide = flkty.selectedElement;

            if (event.layerX > 0) {
                // direction right
                index = $(selectedSlide).index() + 1;
            } else {
                // direction left
                index = $(selectedSlide).index() - 1;
            }

            $slideContent.eq(index).removeClass("mask");
        });

        setTimeout(function() {
            $slideContent.addClass("mask");
        }, 500);
    </script>

    <script>
        jQuery(document).ready(function($) {
            $(".service-slider").owlCarousel({
                loop: true,
                items: 3,
                autoplay: false,
                autoplayTimeout: 6000,
                smartSpeed: 1000,
                dots: false,
                pagination: false,
                margin: 20,
                autoHeight: false,
                stagePadding: 0,
                navText: true,
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
                    576: {
                        items: 1,
                        stagePadding: 0,
                    },
                    768: {
                        items: 2,
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
                items: 3,
                autoplay: true,
                autoplayTimeout: 8000,
                smartSpeed: 2000,
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
                        items: 2,
                        stagePadding: 0,
                    },
                    1170: {
                        items: 3,
                    },
                },
            });
        });
    </script>

    <script>
        window.onload = function() {
            function o() {
                $(".nepal_map_outline").velocity({
                    "stroke-dashoffset": 4e3
                }, 0).velocity({
                    opacity: 1
                }, 0).velocity({
                    "stroke-dashoffset": 0
                }, {
                    duration: 5270,
                    delay: 10
                })
            }

            function n() {
                e = 1, $(".zone").velocity("transition.slideLeftIn", {
                    stagger: 120
                })
            }
            var e = 0;
            $("#outline_map").on("click", function() {
                o()
            }), $("#show_zones").on("click", function() {
                n()
            }), $(".zone").on("mouseenter", function() {
                $(this).addClass("hover")
            }).mouseleave(function() {
                $(this).removeClass("hover")
            })
        };
    </script>

</body>

</html>
