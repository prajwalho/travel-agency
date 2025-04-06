<section class="pt-50">
    <div class="container">
        <div class="special-wrapper">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 d-none d-sm-none d-md-block">
                    <div class="img-card mt-20">
                        <a href="">
                            <div class="imgBox">
                                <picture>
                                    <img class="img-fluid"
                                        src="{{ $page->wc_image ? asset($page->wc_image) : asset('assets/images/placeholder-rect.jpg') }}"
                                        alt="{{ env('APP_NAME') }}"
                                        onerror="this.onerror=null;this.src='{{ asset('assets/images/placeholder-rect.jpg') }}';" />
                                </picture>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6">
                    <div class="mt-20 ps-40">
                        <div class="tit__sm">
                            {!! $page->wc_caption ?? '' !!}
                        </div>
                        <div class="title-widget">
                            <h1>
                                {!! $page->wc_title ?? '' !!}
                            </h1>
                        </div>

                        <div class="paragraph-content mt-20">
                            {!! $page->wc_description ?? '' !!}
                        </div>
                        <a href="{{ $page->wc_readmore_url ?? '#' }}" class="btn custom-btn mt-20">
                            {!! $page->wc_readmore_title ?? '' !!} <span><i class="bi bi-arrow-return-left"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
