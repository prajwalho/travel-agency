@if (isset($page) && $page)
    @extends('layouts.app')

    @section('title', $page->title)

    @section('css')
        <style>
            .video-section .yt_video_section iframe {
                border-radius: 3.375rem;
                box-shadow: rgb(101, 14, 16) 5px 5px 10px;
            }
        </style>
    @endsection

    @section('content')
        {!! $page->content !!}
    @endsection

    @section('js')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                let hero = document.querySelector(".hero");
                let firstSlide = document.querySelector(".hero-slide").cloneNode(true);
                hero.appendChild(firstSlide);

                let slides = document.querySelectorAll(".hero-slide");
                let numberOfSlides = slides.length;
                let currentSlide = 0;

                let autoSlideInterval;

                function setActiveDot(index) {
                    document.querySelectorAll(".dot").forEach((dot, i) => {
                        if (i === index) {
                            dot.classList.add("active");
                        } else {
                            dot.classList.remove("active");
                        }
                    });
                }

                function startAutoSlide() {
                    autoSlideInterval = setInterval(function() {
                        currentSlide++;
                        changeSlide();
                    }, 6000);
                }

                function changeSlide() {
                    slides.forEach((slide) => {
                        slide.style.transform = `translateX(-${currentSlide * 100}%)`;
                    });

                    if (currentSlide === numberOfSlides - 1) {
                        setTimeout(function() {
                            slides.forEach((slide) => {
                                slide.style.transition = "none";
                                slide.style.transform = "translateX(0%)";
                            });

                            void hero.offsetWidth;

                            slides.forEach((slide) => {
                                slide.style.transition =
                                    "transform 1s cubic-bezier(0.4, 0, 0.2, 1)";
                            });

                            currentSlide = 0;
                        }, 1000);
                    }

                    setActiveDot(currentSlide % (numberOfSlides - 1));
                }

                let dotContainer = document.createElement("div");
                dotContainer.classList.add("dots");
                for (let i = 0; i < numberOfSlides - 1; i++) {
                    let dot = document.createElement("button");
                    dot.classList.add("dot");
                    dot.addEventListener("click", function() {
                        clearInterval(autoSlideInterval);
                        currentSlide = i;
                        changeSlide();
                        startAutoSlide();
                    });
                    dotContainer.appendChild(dot);
                }

                hero.appendChild(dotContainer);

                setActiveDot(0);
                startAutoSlide();
            });
        </script>
        <script>
            $(document).ready(function() {

            });
        </script>
    @endsection
@endif
