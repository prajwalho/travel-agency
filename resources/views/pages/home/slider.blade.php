{{-- <div class="hero slider-container">
    @forelse ($sliders as $key => $slider)
        <div class="hero-slide">
            <div class="image">
                <img class="d-block mw-100 overflow-hidden"
                    src="{{ $slider ? asset($slider->image) : asset('assets/images/placeholder-rect.jpg') }}"
                    alt="{{ env('APP_NAME') }}"
                    onerror="this.onerror=null;this.src='{{ asset('assets/images/placeholder-rect.jpg') }}';">
            </div>
            <div class="content-left">
                <p>{{ $slider->sub_title }}</p>
                <h1>{{ $slider->title }}</h1>
                <div class="btn-block">
                    <a href="{{ $slider->url }}" class="btn custom-btn">{{ $slider->url_title }}</a>
                </div>
            </div>
        </div>
    @empty
    @endforelse
</div> --}}

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
