@include('crud::fields.inc.wrapper_start')
<div class="row" id="custom_preview">
    <div class="col-12 offset-sm-6 col-sm-6 offset-md-8 col-md-4 offset-lg-9 col-lg-3">
        {!! $field['value'] !!}
    </div>
</div>
@include('crud::fields.inc.wrapper_end')

@push('crud_fields_styles')
    {{-- YOUR CSS HERE --}}
    <style media="screen">
        #custom_preview .btn {
            text-align: start;
            padding: 12px 16px;
            cursor: pointer;
            border-width: 1px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: 500;
            -webkit-box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.12);
            -moz-box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.12);
            box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.12);
            overflow: hidden;
            position: relative;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            -webkit-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        #custom_preview .btn.btn-round {
            border-radius: 40px;
        }

        #custom_preview .btn.btn-quarternary {
            color: #fff;
            border-color: #fcb134;
            background: #fcb134;
        }

        #custom_preview .btn.btn-quarternary:hover,
        #custom_preview .btn.btn-quarternary:focus {
            border-color: #a44d87 !important;
            background: #a44d87 !important;
        }

        #custom_preview .btn.btn-quarternary.btn-link {
            color: #fcb134;
            background: transparent;
        }

        #custom_preview .btn.btn-quarternary .icon i {
            color: #fcb134;
        }

        #custom_preview .btn .icon.icon-round {
            border-radius: 40px;
        }

        #custom_preview .btn .icon {
            position: absolute;
            top: 0;
            right: 0;
            width: 30%;
            bottom: 0;
            background: #fff;
        }
    </style>
@endpush
