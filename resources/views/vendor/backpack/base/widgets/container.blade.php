@includeWhen(!empty($widget['wrapper']), 'backpack::widgets.inc.wrapper_start')

<div @if (count($widget) > 2) @foreach ($widget as $attribute => $value)
	        @if (is_string($attribute) && $attribute != 'content' && $attribute != 'type')
	            {{ $attribute }}="{{ $value }}" @endif
    @endforeach
    @endif
    class="row bg-white pt-4 pb-2 px-4">

    @if (isset($widget['content']))
        @include('backpack::inc.widgets', ['widgets' => $widget['content']])
    @endif

</div>

@includeWhen(!empty($widget['wrapper']), 'backpack::widgets.inc.wrapper_end')

@push('after_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.min.css') }}">
    <style>
        .stat_widget_info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 14px;
        }

        .stat_icon {
            background-color: #232323;
            border-radius: 100%;
            color: #fff;
            line-height: 60px;
            text-align: center;
            width: 60px;
            height: 60px;
        }

        .stat_icon span i {
            font-size: #fff !important;
            font-size: 24px;
            text-align: center;
        }

        .bg__lblue {
            background-color: #c0d8ff;
        }

        .bg__lcyan {
            background-color: #c9f9ff;
        }

        .bg__laqua {
            background-color: #c3ffeb;
        }

        .bg__lgreen {
            background-color: #def5f0;
        }

        .bg__lorg {
            background-color: #eef1dd;
        }

        .bg__sky {
            background-color: #e3edfd;
        }

        .bg__pink {
            background-color: #f7e9e7;
        }

        .border-radius_10 {
            border-radius: 1.5rem;
        }
    </style>
@endpush

@push('after_scripts')
    <script></script>
@endpush
