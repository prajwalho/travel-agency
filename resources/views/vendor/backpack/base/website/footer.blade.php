@extends(backpack_view('blank'))

@section('content')
    <div class="aiz-titlebar text-left mt-2 mb-3">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="h3">{{ trans('Website Footer') }}</h1>
            </div>
        </div>
    </div>

    <!-- Footer Widget -->
    <div class="card">
        <div class="card-header">
            <h6 class="fw-600 mb-0">{{ trans('Footer Widget') }}</h6>
        </div>
        <div class="card-body">
            <div class="row gutters-10">
                <!-- Contact Info Widget -->
                <div class="col-lg-12">
                    <div class="card shadow-none bg-light">
                        <div class="card-header">
                            <h6 class="mb-0">{{ trans('Contact Info Widget') }}</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <!-- Contact address -->
                                <div class="form-group">
                                    <label>{{ trans('Contact address') }}</label>
                                    <input type="hidden" name="types[]" value="contact_address">
                                    <input type="text" class="form-control" placeholder="{{ trans('Address') }}"
                                        name="contact_address" value="{{ Setting::get('contact_address') }}">
                                </div>
                                <!-- Contact phone -->
                                <div class="form-group">
                                    <label>{{ trans('Contact phone') }}</label>
                                    <input type="hidden" name="types[]" value="contact_phone">
                                    <input type="text" class="form-control" placeholder="{{ trans('Phone') }}"
                                        name="contact_phone" value="{{ Setting::get('contact_phone') }}">
                                </div>
                                <!-- Contact email -->
                                <div class="form-group">
                                    <label>{{ trans('Contact email') }}</label>
                                    <input type="hidden" name="types[]" value="contact_email">
                                    <input type="text" class="form-control" placeholder="{{ trans('Email') }}"
                                        name="contact_email" value="{{ Setting::get('contact_email') }}">
                                </div>
                                <!-- Update Button -->
                                <div class="text-right">
                                    <button type="submit" class="btn btn-success w-230px btn-md rounded-2 fs-14 fw-500 shadow-success">{{ trans('Update') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Link Widget One -->
                <div class="col-lg-12">
                    <div class="card shadow-none bg-light">
                        <div class="card-header">
                            <h6 class="mb-0">{{ trans('Link Widget One') }}</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <!-- Title -->
                                <div class="form-group">
                                    <label>{{ trans('Title') }}</label>
                                    <input type="hidden" name="types[]" value="widget_one">
                                    <input type="text" class="form-control" placeholder="Widget title" name="widget_one"
                                        value="{{ Setting::get('widget_one') }}">
                                </div>
                                <!-- Links -->
                                <div class="form-group">
                                    <label>{{ trans('Links') }} - ({{ trans('Label') }})</label>
                                    <div class="w1-links-target">
                                        <input type="hidden" name="types[]" value="widget_one_labels">
                                        <input type="hidden" name="types[]" value="widget_one_links">
                                        @if (Setting::get('widget_one_labels') != null)
                                            @foreach (json_decode(Setting::get('widget_one_labels'), true) as $key => $value)
                                                @php
                                                    $widget_one_links = '';
                                                    if (
                                                        isset(json_decode(Setting::get('widget_one_links'), true)[$key])
                                                    ) {
                                                        $widget_one_links = json_decode(
                                                            Setting::get('widget_one_links'),
                                                            true,
                                                        )[$key];
                                                    }
                                                @endphp
                                                <div class="row gutters-5">
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="{{ trans('Label') }}"
                                                                name="widget_one_labels[]" value="{{ $value }}">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="http://"
                                                                name="widget_one_links[]" value="{{ $widget_one_links }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <button type="button"
                                                            class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger"
                                                            data-toggle="remove-parent" data-parent=".row">
                                                            <i class="las la-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <button type="button" class="btn btn-secondary btn-sm" data-toggle="add-more"
                                        data-content=
                                        '
                                        <div class="row gutters-5">
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="{{ trans('Label') }}" name="widget_one_labels[]">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="http://" name="widget_one_links[]">
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
                                                    <i class="las la-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        '
                                        data-target=".w1-links-target">
                                        {{ trans('Add New') }}
                                    </button>
                                </div>
                                <!-- Update Button -->
                                <div class="text-right">
                                    <button type="submit" class="btn btn-success w-230px btn-md rounded-2 fs-14 fw-500 shadow-success">{{ trans('Update') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Link Widget Two -->
                <div class="col-lg-12">
                    <div class="card shadow-none bg-light">
                        <div class="card-header">
                            <h6 class="mb-0">{{ trans('Link Widget Two') }}</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <!-- Title -->
                                <div class="form-group">
                                    <label>{{ trans('Title') }}</label>
                                    <input type="hidden" name="types[]" value="widget_two">
                                    <input type="text" class="form-control" placeholder="Widget title"
                                        name="widget_two" value="{{ Setting::get('widget_two') }}">
                                </div>
                                <!-- Links -->
                                <div class="form-group">
                                    <label>{{ trans('Links') }} - ({{ trans('Label') }})</label>
                                    <div class="w2-links-target">
                                        <input type="hidden" name="types[]" value="widget_two_labels">
                                        <input type="hidden" name="types[]" value="widget_two_links">
                                        @if (Setting::get('widget_two_labels') != null)
                                            @foreach (json_decode(Setting::get('widget_two_labels'), true) as $key => $value)
                                                @php
                                                    $widget_two_links = '';
                                                    if (
                                                        isset(json_decode(Setting::get('widget_two_links'), true)[$key])
                                                    ) {
                                                        $widget_two_links = json_decode(
                                                            Setting::get('widget_two_links'),
                                                            true,
                                                        )[$key];
                                                    }
                                                @endphp
                                                <div class="row gutters-5">
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="{{ trans('Label') }}"
                                                                name="widget_two_labels[]" value="{{ $value }}">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="http://" name="widget_two_links[]"
                                                                value="{{ $widget_two_links }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <button type="button"
                                                            class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger"
                                                            data-toggle="remove-parent" data-parent=".row">
                                                            <i class="las la-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <button type="button" class="btn btn-secondary btn-sm" data-toggle="add-more"
                                        data-content=
                                        '
                                        <div class="row gutters-5">
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="{{ trans('Label') }}" name="widget_two_labels[]">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="http://" name="widget_two_links[]">
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
                                                    <i class="las la-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        '
                                        data-target=".w2-links-target">
                                        {{ trans('Add New') }}
                                    </button>
                                </div>
                                <!-- Update Button -->
                                <div class="text-right">
                                    <button type="submit" class="btn btn-success w-230px btn-md rounded-2 fs-14 fw-500 shadow-success">{{ trans('Update') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after_scripts')
    <script>
        var AIZ = AIZ || {};
        AIZ.local = {
            nothing_selected: '{!! trans('Nothing selected') !!}',
            nothing_found: '{!! trans('Nothing found') !!}',
            choose_file: '{{ trans('Choose file') }}',
            file_selected: '{{ trans('File selected') }}',
            files_selected: '{{ trans('Files selected') }}',
            add_more_files: '{{ trans('Add more files') }}',
            adding_more_files: '{{ trans('Adding more files') }}',
            drop_files_here_paste_or: '{{ trans('Drop files here, paste or') }}',
            browse: '{{ trans('Browse') }}',
            upload_complete: '{{ trans('Upload complete') }}',
            upload_paused: '{{ trans('Upload paused') }}',
            resume_upload: '{{ trans('Resume upload') }}',
            pause_upload: '{{ trans('Pause upload') }}',
            retry_upload: '{{ trans('Retry upload') }}',
            cancel_upload: '{{ trans('Cancel upload') }}',
            uploading: '{{ trans('Uploading') }}',
            processing: '{{ trans('Processing') }}',
            complete: '{{ trans('Complete') }}',
            file: '{{ trans('File') }}',
            files: '{{ trans('Files') }}',
        }
    </script>
    <script src="{{ asset('js/aiz-core.js') }}"></script>
@endpush
