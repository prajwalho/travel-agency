@push('after_styles')
@endpush
@push('after_scripts')
    <script src="{{ asset('js/spotlight.bundle.js') }}"></script>
@endpush
@php
    $values = data_get($entry, $column['name']);
    $values == '""' && ($values = []);
    if (!empty($values)) {
        $counter = 1;
        while (!is_array($values)) {
            if ($counter >= 20) {
                $values = [];
                break;
            }
            $values = json_decode($values, true);
            $counter++;
        }
    }
@endphp
<span>
    @if (is_array($values) && count($values))
        <div class="row">
            @foreach ($values as $value)
                <div class="col-12 col-sm-6 col-md-4 col-xl-3 mb-2">
                    @if ($value && file_exists(public_path($value)))
                        <a href="{{ asset($value) }}" class="spotlight">
                            <img src="{{ asset($value) }}" class="img-fluid rounded"
                                style="height: 180px; object-fit: cover;">
                        </a>
                    @else
                        <a href="https://dummyimage.com/360x280&text=No%20Image%20Available" class="spotlight">
                            <img src="https://dummyimage.com/360x280&text=No%20Image%20Available"
                                class="img-fluid rounded" style="height: 180px; object-fit: cover;">
                        </a>
                    @endif
                </div>
            @endforeach
        </div>
    @else
    @endif
</span>
