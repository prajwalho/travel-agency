@push('after_styles')
    <style>
        .toc-container {
            position: sticky;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 1px 2px rgba(11, 60, 93, .4), 0 -1px 2px rgba(11, 60, 93, .04);
        }

        .toc-title {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .toc-list {
            list-style-type: none;
            padding-left: 0;
            max-height: 80vh;
            overflow-x: auto;
            overflow-y: auto;
        }

        .toc-list ul {
            list-style-type: none;
        }

        .toc-item {
            margin-bottom: 8px;
        }

        .toc-level-1 {
            margin-left: 0;
        }

        .toc-level-2 {
            margin-left: 32px;
            margin-bottom: 2px;
        }

        .toc-link {
            text-decoration: none;
            color: #1f1a17;
            transition: color 0.3s ease;
            display: flex;
            align-items: flex-start;
            gap: 8px;
        }

        .toc-link span.counter {
            display: flex;
            justify-content: end;
            width: 24px;
        }

        .toc-level-2 .toc-link {
            background-color: #e1e1e1;
            padding: 0.75rem;
            border-radius: 4px;
        }

        .toc-link:hover {
            color: #0094de;
            text-decoration: none;
        }

        .toc-list .toc-item .toc-link {
            font-size: 16px;
            font-weight: 600;
        }

        .toc-list .toc-item .toc-link.toc-link-active {
            font-weight: 700;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
@endpush

@if ($entry->toc)
    <div class="toc-container">
        <h4 class="toc-title">Table of Contents</h4>
        <ul class="toc-list">
            @php
                $first_level_count = 1;
                $second_level_count = 1;
                $first_level = true;
            @endphp
            @foreach ($entry->toc as $key => $item)
                @php
                    if (isset($item['level']) && $item['level'] == 2) {
                        $first_level = false;
                    } else {
                        $first_level = true;
                    }
                @endphp
                @if ($first_level)
                    <li class="toc-item toc-level-1">
                        <a href="#section-{{ $loop->index }}" class="toc-link">
                            <span class="counter">{{ $first_level_count }}.</span>
                            <span>{{ $item['title'] }}</span>
                        </a>
                    </li>
                    @php
                        $first_level_count++;
                        $second_level_count = 1;
                    @endphp
                @else
                    <li class="toc-item toc-level-2">
                        <a href="#section-{{ $loop->index }}" class="toc-link">
                            <span>{{ $second_level_count }}.</span>
                            <span>{{ $item['title'] }}</span>
                        </a>
                    </li>
                    @php
                        $second_level_count++;
                    @endphp
                @endif
            @endforeach
        </ul>
    </div>
@endif
