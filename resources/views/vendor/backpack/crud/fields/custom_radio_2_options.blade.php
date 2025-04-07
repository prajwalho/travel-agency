@include('crud::fields.inc.wrapper_start')
@include('crud::fields.inc.translatable_icon')
<div class="mb-20">
    <label for="{{ $field['name'] }}" class="form-label">
        {!! $field['label'] !!}
    </label>

    @php
        $value = old($field['name']) ? old($field['name']) : (isset($field['value']) ? $field['value'] : (isset($field['default']) ? $field['default'] : ''));
        $options = $field['options'];
        $firstLoopIdIndex = 1;
        $secondLoopForIndex = 1;
        $secondLoopClassIndex = 1;
    @endphp

    <div class="row px-3">
        <div class="wrapper">
            @foreach ($options as $optionKey => $optionLabel)
                <input type="radio" name="{{ $field['name'] }}" id="option-{{ $firstLoopIdIndex++ }}"
                    {{ $value == $optionKey ? 'checked' : '' }} value="{{ $optionKey }}">
            @endforeach

            @foreach ($options as $optionKey => $optionLabel)
                <label for="option-{{ $secondLoopForIndex++ }}" class="option option-{{ $secondLoopClassIndex++ }}">
                    <div class="dot"></div>
                    <span>{{ $optionLabel }}</span>
                </label>
            @endforeach
        </div>
    </div>
</div>
{{-- HINT --}}
@if (isset($field['hint']))
    <p class="help-block">{!! $field['hint'] !!}</p>
@endif
@include('crud::fields.inc.wrapper_end')
@push('crud_fields_styles')
    {{-- YOUR CSS HERE --}}
    <style media="screen">
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

        .wrapper .option {
            background: #fff;
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            margin: 0 5px;
            border-radius: 5px;
            cursor: pointer;
            padding: 5px 10px;
            border: 2px solid lightgrey;
            transition: all 0.3s ease;
        }

        .wrapper .option .dot {
            height: 20px;
            width: 20px;
            background: #d9d9d9;
            border-radius: 50%;
            position: relative;
        }

        .wrapper .option-1 .dot::before {
            position: absolute;
            content: "";
            top: 4px;
            left: 4px;
            width: 12px;
            height: 12px;
            background: #d80000;
            border-radius: 50%;
            opacity: 0;
            transform: scale(1.5);
            transition: all 0.3s ease;
        }

        .wrapper .option-2 .dot::before {
            position: absolute;
            content: "";
            top: 4px;
            left: 4px;
            width: 12px;
            height: 12px;
            background: #50b848;
            border-radius: 50%;
            opacity: 0;
            transform: scale(1.5);
            transition: all 0.3s ease;
        }

        input[name="{{ $field['name'] }}"] {
            display: none;
        }

        #option-1:checked:checked~.option-1 {
            border-color: #d80000;
            background: #d80000;
        }

        #option-2:checked:checked~.option-2 {
            border-color: #50b848;
            background: #50b848;
        }

        #option-1:checked:checked~.option-1 .dot,
        #option-2:checked:checked~.option-2 .dot {
            background: #fff;
        }

        #option-1:checked:checked~.option-1 .dot::before,
        #option-2:checked:checked~.option-2 .dot::before {
            opacity: 1;
            transform: scale(1);
        }

        .wrapper .option span {
            font-size: 14px;
            color: #808080;
        }

        #option-1:checked:checked~.option-1 span,
        #option-2:checked:checked~.option-2 span {
            color: #fff;
        }
    </style>
@endpush
