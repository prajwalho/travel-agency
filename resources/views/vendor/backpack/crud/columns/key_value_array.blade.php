@push('after_styles')
    <style>
        table {
            position: relative;
            width: 100%;
            overflow-x: scroll;
        }

        table th {
            text-align: left;
            vertical-align: bottom;
            border-bottom: 1px solid #ccc;
            text-transform: uppercase;
            font: 0.8em 'Oswald', sans-serif;
            font-weight: 900;
        }

        table th,
        table td {
            padding: 0.4em;
        }

        table.fold-table {
            background: white;
            color: #555;
        }

        table.fold-table>tbody>tr.view {
            transition: all 0.3s ease;
        }

        table.fold-table>tbody>tr.view td,
        table.fold-table>tbody>tr.view th {
            cursor: pointer;
            text-align: center;
        }

        table.fold-table>thead>tr th {
            text-align: center;
        }

        table.fold-table>tbody>tr.view td:first-child,
        table.fold-table>tbody>tr.view th:first-child {
            position: relative;
            padding-left: 20px;
        }

        table.fold-table>tbody>tr.view td:first-child:before,
        table.fold-table>tbody>tr.view th:first-child:before {
            position: absolute;
            top: 50%;
            left: 5px;
            width: 9px;
            height: 16px;
            margin-top: -8px;
            font: 16px fontawesome;
            /* content: "\f0d7"; */
            transition: all 0.3s ease;
        }

        table.fold-table>tbody>tr.view:nth-child(4n-1) {
            background: #eee;
        }

        table.fold-table>tbody>tr.view:hover {
            background: #ddd;
        }

        table.fold-table>tbody>tr.view.open {
            background: tomato;
            color: white;
        }

        table.fold-table>tbody>tr.view.open td:first-child:before,
        table.fold-table>tbody>tr.view.open th:first-child:before {
            transform: rotate(-180deg);
            color: white;
        }

        table.fold-table>tbody>tr.fold {
            display: none;
        }

        table.fold-table>tbody>tr.fold.open {
            display: table-row;
        }

        .fold-content {
            padding: 0.5em;
        }

        .fold-content h3 {
            margin-top: 0;
        }

        .fold-content>table {
            background: white;
            color: #555;
            box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .fold-content>table>tbody>tr {
            cursor: pointer;
        }

        .fold-content>table>tbody>tr:nth-child(even) {
            background: #eee;
        }

        .fold-content>table>tbody>tr:hover {
            background: #ddd;
        }

        .visible-small {
            display: none;
        }

        .visible-big {
            display: block;
        }

        @media (max-width: 700px) {
            body {
                font-size: 0.8em;
                padding: 0 10px;
            }

            table th,
            table td {
                padding: 1em 0.2em;
            }

            table th {
                vertical-align: bottom;
                padding-bottom: 0;
            }

            table.small-friendly>thead {
                display: none;
            }

            table.small-friendly>tbody>tr>td,
            table.small-friendly>tbody>tr>th {
                position: relative;
                padding: 0;
                padding-left: 50%;
                display: block;
                vertical-align: top;
                border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            }

            table.small-friendly>tbody>tr>td:before,
            table.small-friendly>tbody>tr>th:before {
                position: absolute;
                top: 0;
                left: 0.5em;
                max-width: 50%;
                content: attr(data-th) ": ";
                display: block;
                font-weight: bold;
            }

            table.small-friendly>tbody>tr>td:first-child,
            table.small-friendly>tbody>tr>th:first-child {
                margin-top: 1em;
            }

            table.small-friendly>tbody>tr>td:last-child,
            table.small-friendly>tbody>tr>th:last-child {
                margin-bottom: 1em;
                border: 0;
            }

            .visible-small {
                display: block;
            }

            .visible-big {
                display: none;
            }
        }
    </style>
@endpush
@push('after_scripts')
    <script>
        $(function() {
            $(".fold-table tr.view").on("click", function() {
                if ($(this).hasClass("open")) {
                    $(this).removeClass("open").next(".fold").removeClass("open");
                } else {
                    $(".fold-table tr.view").removeClass("open").next(".fold").removeClass("open");
                    $(this).addClass("open").next(".fold").addClass("open");
                }
            });
        });
    </script>
@endpush

@php
    $values = data_get($entry, $column['name']) ?? [];
    if (!is_array($values)) {
        $values = json_decode($values, true);
    }
@endphp

@if (!empty($values) && is_array($values))
    <span>
        <table class="fold-table">
            <thead>
                <tr class="view">
                    @foreach ($values[0] as $key => $value)
                        <th>{{ $key }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($values as $value)
                    <tr class="view">
                        @foreach ($value as $key => $value)
                            <td class="">
                                {{ $value }}
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </span>
@endif
