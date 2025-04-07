<!-- PAGE OR LINK field -->
<!-- Used in Backpack\MenuCRUD -->

<?php
$field['options'] = [
    'page_link' => trans('backpack::crud.page_link'),
    'internal_link' => trans('backpack::crud.internal_link'),
    'external_link' => trans('backpack::crud.external_link'),
    'trip_slug' => trans('Trips'),
];
$field['allows_null'] = false;
$page_model = $field['page_model'];
$active_pages = $page_model::all();
$trip_model = $field['trip_model'];
$active_trips = $trip_model::where('status', 'PUBLISHED')->orderedByLft()->get();

$entry_link = $field['name']['link'] ?? 'link';
$entry_type = $field['name']['type'] ?? 'type';
$entry_page_id = $field['name']['page_id'] ?? 'page_id';
$entry_trip_id = $field['name']['trip_id'] ?? 'trip_id';
?>

@include('crud::fields.inc.wrapper_start')
<label>{!! $field['label'] !!}</label>
@include('crud::fields.inc.translatable_icon')

<div class="row" data-init-function="bpFieldInitPageOrLinkElement">
    <div class="col-sm-3">
        <select data-identifier="page_or_link_select" name="{!! $entry_type !!}" @include('crud::fields.inc.attributes')>

            @if (isset($field['allows_null']) && $field['allows_null'] == true)
                <option value="">-</option>
            @endif

            @if (count($field['options']))
                @foreach ($field['options'] as $key => $value)
                    <option value="{{ $key }}" @if (isset($entry) && $key == $entry->$entry_type) selected @endif>
                        {{ $value }}</option>
                @endforeach
            @endif
        </select>
    </div>
    <div class="col-sm-9">
        <!-- external link input -->
        <div
            class="page_or_link_value page_or_link_external_link {{ !isset($entry) || $entry->$entry_type != 'external_link' ? 'd-none' : '' }}">
            <input type="url" class="form-control" name="{!! $entry_link !!}"
                placeholder="{{ trans('backpack::crud.page_link_placeholder') }}"
                @if (!isset($entry) || $entry->$entry_type != 'external_link') disabled="disabled" @endif
                @if (isset($entry) && $entry->$entry_type == 'external_link' && isset($entry->$entry_link) && $entry->$entry_link != '') value="{{ $entry->$entry_link }}" @endif>
        </div>
        <!-- internal link input -->
        <div
            class="page_or_link_value page_or_link_internal_link {{ !isset($entry) || $entry->$entry_type != 'internal_link' ? 'd-none' : '' }}">
            <input type="text" class="form-control" name="{!! $entry_link !!}"
                placeholder="{{ trans('backpack::crud.internal_link_placeholder', ['url', url(config('backpack.base.route_prefix') . '/page')]) }}"
                @if (!isset($entry) || $entry->$entry_type != 'internal_link') disabled="disabled" @endif
                @if (isset($entry) && $entry->$entry_type == 'internal_link' && isset($entry->$entry_link) && $entry->$entry_link != '') value="{{ $entry->$entry_link }}" @endif>
        </div>
        <!-- page slug input -->
        <div
            class="page_or_link_value page_or_link_page {{ isset($entry) && $entry->$entry_type != 'page_link' ? 'd-none' : '' }}">
            <select class="form-control" name="{!! $entry_page_id !!}"
                @if (isset($entry) && $entry->$entry_type != 'page_link') disabled="disabled" @endif>
                @if (!count($active_pages))
                    <option value="">-</option>
                @else
                    @foreach ($active_pages as $key => $page)
                        <option value="{{ $page->id }}" @if (isset($entry) && isset($entry->$entry_page_id) && $page->id == $entry->$entry_page_id) selected @endif>
                            {{ $page->name }}</option>
                    @endforeach
                @endif

            </select>
        </div>

        <!-- trip slug input -->
        <div
            class="page_or_link_value page_or_trip_slug {{ !isset($entry) || $entry->$entry_type != 'trip_slug' ? 'd-none' : '' }}">
            <select class="form-control" name="{!! $entry_trip_id !!}"
                @if (!isset($entry) || $entry->$entry_type != 'trip_slug') disabled="disabled" @endif>
                @if (!count($active_trips))
                    <option value="">-</option>
                @else
                    @foreach ($active_trips as $key => $trip)
                        <option value="{{ $trip->id }}" @if (isset($entry) && isset($entry->$entry_trip_id) && $trip->id == $entry->$entry_trip_id) selected @endif>
                            {{ $trip->title . ($trip->code ? ' ( ' . $trip->code . ' ) ' : '') }}</option>
                    @endforeach
                @endif

            </select>
        </div>
    </div>
</div>

{{-- HINT --}}
@if (isset($field['hint']))
    <p class="help-block">{!! $field['hint'] !!}</p>
@endif

@include('crud::fields.inc.wrapper_end')


{{-- ########################################## --}}
{{-- Extra CSS and JS for this particular field --}}
{{-- If a field type is shown multiple times on a form, the CSS and JS will only be loaded once --}}
@if ($crud->fieldTypeNotLoaded($field))
    @php
        $crud->markFieldTypeAsLoaded($field);
    @endphp

    {{-- FIELD CSS - will be loaded in the after_styles section --}}
    @push('crud_fields_styles')
    @endpush

    {{-- FIELD JS - will be loaded in the after_scripts section --}}
    @push('crud_fields_scripts')
        <script>
            function bpFieldInitPageOrLinkElement(element) {
                element.find('[data-identifier=page_or_link_select]').change(function(e) {
                    $(this).closest('.row').find(".page_or_link_value input").attr('disabled', 'disabled');
                    $(this).closest('.row').find(".page_or_link_value select").attr('disabled', 'disabled');
                    $(this).closest('.row').find(".page_or_link_value").removeClass("d-none").addClass("d-none");

                    switch ($(this).val()) {
                        case 'external_link':
                            $(this).closest('.row').find(".page_or_link_external_link input").removeAttr('disabled');
                            $(this).closest('.row').find(".page_or_link_external_link").removeClass('d-none');
                            break;

                        case 'internal_link':
                            $(this).closest('.row').find(".page_or_link_internal_link input").removeAttr('disabled');
                            $(this).closest('.row').find(".page_or_link_internal_link").removeClass('d-none');
                            break;

                        case 'trip_slug':
                            $(this).closest('.row').find(".page_or_trip_slug select").removeAttr('disabled');
                            $(this).closest('.row').find(".page_or_trip_slug").removeClass('d-none');
                            break;

                        default: // page_link
                            $(this).closest('.row').find(".page_or_link_page select").removeAttr('disabled');
                            $(this).closest('.row').find(".page_or_link_page").removeClass('d-none');
                    }
                });
            }
        </script>
    @endpush
@endif
{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}
