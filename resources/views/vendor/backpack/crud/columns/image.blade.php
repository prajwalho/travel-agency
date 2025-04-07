{{-- image column type --}}
@php
    $value = data_get($entry, $column['name']);

    if ($value) {
        $column['height'] = $column['height'] ?? '25px';
        $column['width'] = $column['width'] ?? 'auto';
        $column['radius'] = $column['radius'] ?? '3px';
        $column['prefix'] = $column['prefix'] ?? '';

        if (is_array($value)) {
            $value = json_encode($value);
        }

        if (preg_match('/^data\:image\//', $value)) {
            // base64_image
            $href = $src = $value;
        } elseif (isset($column['disk'])) {
            // image from a different disk (like s3 bucket)
            $href = $src = Storage::disk($column['disk'])->url($column['prefix'] . $value);
        } else {
            // plain-old image, from a local disk
            // $href = $src = url($column['prefix'] . $value);
            $href = $src = url('public/' . $value);
        }

        $column['wrapper']['element'] = $column['wrapper']['element'] ?? 'a';
        $column['wrapper']['href'] = $column['wrapper']['href'] ?? $href;
        $column['wrapper']['target'] = $column['wrapper']['target'] ?? '_blank';
    }

    $dummyImg50x50 = 'https://dummyimage.com/50x50';
    $dummyImg160x120 = 'https://dummyimage.com/160x120&text=No%20Image%20Available!';
    $dummyImgSrc = '';

    if ($crud->getCurrentOperation() == 'list') {
        $dummyImgSrc = $dummyImg50x50;
    } else {
        $dummyImgSrc = $dummyImg160x120;
    }
@endphp

<span>
    @if (empty($value))
        -
    @else
        @includeWhen(!empty($column['wrapper']), 'crud::columns.inc.wrapper_start')
        <img class="img-fit h-100 lazyload" src="{{ $src }}"
            style="max-height: {{ $column['height'] }}; width: {{ $column['width'] }}; border-radius: {{ $column['radius'] }};"
            data-src="" onerror="this.onerror=null;this.src='{{ $dummyImgSrc }}';" />
        @includeWhen(!empty($column['wrapper']), 'crud::columns.inc.wrapper_end')
    @endif
</span>
