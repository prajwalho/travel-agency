@push('after_styles')
@endpush
@push('after_scripts')
@endpush
@php
    $values = data_get($entry, $column['name']);
    if (!is_array($values)) {
        $values = json_decode($values, true);
    }

    function getYoutubeVideoLink($youtubeLink)
    {
        if (filter_var($youtubeLink, FILTER_VALIDATE_URL)) {
            $queryString = parse_url($youtubeLink, PHP_URL_QUERY);
            parse_str($queryString, $params);
            $videoId = $params['v'] ?? '';
        } else {
            $videoId = $youtubeLink;
        }

        return $videoId;
    }
@endphp
<span>
    @if (!empty($values) && is_array($values))
        <div class="row">
            @foreach ($values as $value)
                <div class="col-12 col-sm-6 col-xl-4 mb-2">
                    <iframe class="embed-responsive-item w-100"
                        src="https://www.youtube.com/embed/{{ getYoutubeVideoLink($value['link']) }}?rel=0"
                        allowfullscreen></iframe>
                </div>
            @endforeach
        </div>
    @else
    @endif
</span>
