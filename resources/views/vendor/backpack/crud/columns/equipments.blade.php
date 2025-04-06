@push('after_styles')
    <style>
        #tabEquipments {
            padding: 0;
            background: 0 0
        }

        #tabEquipments>p {
            color: #3b3b3b;
            font-size: 15px;
            line-height: 24px
        }

        #tabEquipments .heading {
            margin-bottom: 18px
        }

        .equipment-items {
            margin-bottom: 30px;
        }

        .equipment-items-img {
            margin-bottom: 15px;
        }

        .equipment-items-img>div {
            display: inline-block;
            background: #ebebeb;
            width: 48px;
            height: 48px;
            border-radius: 50px;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            -ms-border-radius: 50px;
            -o-border-radius: 50px;
            text-align: center;
            line-height: 46px;
            margin-right: 8px
        }

        .equipment-items-img>div img,
        .equipment-items-img>div svg {
            height: 30px
        }

        .equipment-items-img h3 {
            font-family: "Inter", sans-serif;
            display: inline-block;
            font-weight: 500;
            font-size: 20px;
            margin: 0;
            vertical-align: middle;
            color: #3e9adc;
        }

        .equipment-items .equip-list {
            padding-left: 8px;
        }

        .equipment-items .equip-list li,
        .equipment-items p {
            font-size: 15px;
            font-weight: 400;
            line-height: 24px;
            color: #111;
            margin-bottom: 10px;
            list-style: none;
            list-style-position: inside;
        }

        .equipment-items .equip-list ul li::before {
            font-family: FontAwesome;
            display: inline-block;
            padding-right: 6px;
            vertical-align: middle;
            content: "\f138";
            color: #3e9adc;
        }
    </style>
@endpush
@push('after_scripts')
@endpush

@if (!empty($entry->equipments))
    <div id="tabEquipments">
        @foreach ($entry->equipments as $equipment)
            <div class="equipment-items">
                <div class="equipment-items-img">
                    <div>
                        @if ($equipment['image'] && file_exists($equipment['image']))
                            <img loading="lazy" src="{{ asset($equipment['image']) }}" class="img-fluid rounded-circle"
                                style="height: 48px; object-fit: cover;">
                        @else
                            <img loading="lazy" src="https://dummyimage.com/48x48&text=No%20Image%20Available!"
                                class="img-fluid rounded-circle">
                        @endif
                    </div>
                    <h3> {{ $equipment['title'] }}</h3>
                </div>
                <div class="equip-list">
                    {!! $equipment['description'] !!}
                </div>
            </div>
        @endforeach
    </div>
@else
@endif
