<section class="section-content about-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6">
                <div>
                    <div class="tit__sm">
                        {!! $page->about_caption ?? '' !!}
                    </div>
                    <div class="title-widget">
                        <h2>
                            {!! $page->about_title ?? '' !!}
                        </h2>
                    </div>

                    <div class="content mt-20">
                        {!! $page->about_description ?? '' !!}
                    </div>
                    <a href="{{ $page->about_readmore_url ?? '#' }}" class="btn custom-btn mt-20">
                        {!! $page->about_readmore_title ?? '' !!} <span><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-5 offset-md-1">
                <div class="img-card mt-20">
                    <a href="">
                        <div class="imgBox">
                            <picture>
                                <img class="img-fluid"
                                    src="{{ $page->about_image ? asset($page->about_image) : asset('assets/images/placeholder-rect.jpg') }}"
                                    alt="{{ env('APP_NAME') }}"
                                    onerror="this.onerror=null;this.src='{{ asset('assets/images/placeholder-rect.jpg') }}';" />
                            </picture>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
