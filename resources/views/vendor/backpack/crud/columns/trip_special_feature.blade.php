@push('after_styles')
    <style>
        .section h2 {
            color: #00a859;
        }

        .special-feature-desc {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
        }

        .special-feature-desc ul>li {
            margin-bottom: 10px;
            list-style: none;
            list-style-position: inside;
        }

        .special-feature-desc ul li::before {
            font-family: FontAwesome;
            display: inline-block;
            padding-right: 6px;
            vertical-align: middle;
            content: "\f138";
            color: #00a859;
        }
    </style>
@endpush
@push('after_scripts')
@endpush

<span>
    @if (!empty($entry->special_feature))
        <div class="container my-2">
            @foreach ($entry->special_feature as $feature)
                <div class="section">
                    <h2 class="mb-4">{{ $feature['title'] }}</h2>
                    <div class="row align-items-start mb-4">
                        <div class="col-auto">
                            @if ($feature['image'] && file_exists(public_path($feature['image'])))
                                <img src="{{ asset($feature['image']) }}" class="img-fluid rounded-circle"
                                    style="height: 80px; object-fit: cover;">
                            @else
                                <img src="https://dummyimage.com/80x80&text=No%20Image%20Available!" class="img-fluid rounded-circle">
                            @endif
                        </div>
                        <div class="special-feature-desc">
                            {!! $feature['description'] !!}
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Repeat similar structure for other sections -->
        </div>
    @else
    @endif
</span>
