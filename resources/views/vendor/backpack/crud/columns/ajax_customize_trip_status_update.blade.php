@push('after_styles')
    <style>
        .wrapper {
            display: inline-flex;
            background: #fff;
            min-width: 18rem;
            align-items: center;
            justify-content: space-evenly;
            border-radius: 5px;
            padding: 5px 5px;
            box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.2);
        }

        .wrapper select.pending {
            border-color: #d8a536;
            box-shadow: 0 0 0 2px #c4a51d;
        }

        .wrapper select.pending:focus,
        .wrapper select.pending:hover {
            border-color: #f3a909;
            box-shadow: 0 0 0 2px #e7be04;
        }

        .wrapper select.success {
            border-color: #43d85b;
            box-shadow: 0 0 0 2px #34b934;
        }

        .wrapper select.success:focus,
        .wrapper select.success:hover {
            border-color: #17ec3b;
            box-shadow: 0 0 0 2px #0fda0f;
        }

        .wrapper select.canceled {
            border-color: #dd4d4d;
            box-shadow: 0 0 0 2px #c53d3d;
        }

        .wrapper select.canceled:focus,
        .wrapper select.canceled:hover {
            border-color: #f51010;
            box-shadow: 0 0 0 2px #f01111;
        }
    </style>
@endpush

<div class="mb-20">
    @php
        $value = data_get($entry, $column['name']);
        $options = $column['options'];
    @endphp

    <div class="row px-3">
        <div class="wrapper">
            <select name="{{ $column['name'] }}" id="{{ $column['name'] }}" class="form-control {{ Str::lower($value) }} ">
                @foreach ($options as $optionKey => $optionLabel)
                    <option value="{{ $optionKey }}" {{ $value == $optionKey ? 'selected' : '' }}>
                        {{ $optionLabel }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>

@push('after_scripts')
    {{-- Script --}}
    <script>
        $(document).ready(function() {
            // Function to update the status via AJAX
            function updateStatus(newStatus) {
                $.ajax({
                    type: 'POST',
                    url: '{{ route('customizeTrip.status.update') }}',
                    data: {
                        status: newStatus,
                        id: '{{ $entry->id }}',
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(data) {
                        if (data.status_code == 200) {
                            $('select[name="status"]').removeClass();
                            $('select[name="status"]').addClass(
                                'form-control ' + data.status_text.toLowerCase()
                            );

                            swal({
                                title: data.status_text.toUpperCase(),
                                text: data.message,
                                icon: "success",
                                buttons: false,
                            });
                        } else {
                            swal({
                                title: "Failed!",
                                text: data.message,
                                icon: "error",
                                buttons: false,
                            });
                        }
                    },
                    error: function(error) {
                        swal({
                            title: "Failed!",
                            text: 'Something went wrong! Please reload the page.',
                            icon: "error",
                            buttons: false,
                        });
                    },
                });
            }

            // Handle status change event
            $('select[name="status"]').change(function() {
                var newStatus = $(this).val();
                updateStatus(newStatus);
            });
        });
    </script>
@endpush
