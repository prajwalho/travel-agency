@push('after_styles')
    <style>

    </style>
@endpush
@push('after_scripts')
    <script>
        $(function() {

        });
    </script>
@endpush

@php
    $vehicles = data_get($entry, $column['name']) ?? [];
    if (!is_array($vehicles)) {
        $vehicles = json_decode($vehicles, true);
    }
@endphp

<span class="table table-responsive">
    <table>
        <tbody>
            @forelse ($vehicles as $vehicle)
                @foreach ($vehicle as $key => $value)
                    <tr>
                        <th>
                            <span class="text-capitalize">
                                @if ($key == 'title')
                                    Title/Model
                                @else
                                    {{ $key }}
                                @endif
                            </span>
                        </th>

                        @if ($key == 'description')
                            <td class="w-100">
                                <div style="border: 1px dashed #ccc; padding: 10px; background-color: #fefefe;">
                                    {{ $value }}
                                </div>
                            </td>
                        @else
                            <td class="w-100">
                                <span>
                                    {{ $value }}
                                </span>
                            </td>
                        @endif
                    </tr>
                @endforeach
            @empty
            @endforelse
        </tbody>
    </table>
</span>
