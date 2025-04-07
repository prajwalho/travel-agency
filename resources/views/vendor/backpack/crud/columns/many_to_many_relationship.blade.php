{{-- relationships with pivot table (n-n) --}}
@php
    $column['escaped'] = $column['escaped'] ?? true;
    $column['prefix'] = $column['prefix'] ?? '';
    $column['suffix'] = $column['suffix'] ?? '';
    $column['attribute'] = $column['attribute'] ?? (new ($column['model'])())->identifiableAttribute();

    $results = $column['method'];
    $results_array = [];

    if ($results !== null && !$results->isEmpty()) {
        $related_key = $results->first()->getKeyName();
        $results_array = $results->pluck($column['attribute'], $related_key)->toArray();
    }
@endphp

<span>
    @if (!empty($results_array))
        {{ $column['prefix'] }}
        @foreach ($results_array as $key => $text)
            @php
                $related_key = $key;
                $showUrl = url("/admin/{$column['url_segment']}/{$related_key}/show");
            @endphp

            <span class="d-inline-flex">
                @includeWhen(!empty($column['wrapper']), 'crud::columns.inc.wrapper_start')
                @if ($column['escaped'])
                    <a href="{{ $showUrl }}" class="badge bg-secondary p-2">
                        {{ $text }}
                    </a>
                @else
                    {!! $text !!}
                @endif
                @includeWhen(!empty($column['wrapper']), 'crud::columns.inc.wrapper_end')

                @if (!$loop->last)
                    ,
                @endif
            </span>
        @endforeach
        {{ $column['suffix'] }}
    @else
        -
    @endif
</span>
