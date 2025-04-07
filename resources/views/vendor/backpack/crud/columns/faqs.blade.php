<span>
    @if (!empty($entry->faqs))
        <div class="accordion" id="accordionExample">
            @foreach ($entry->faqs as $key => $faq)
                <div class="card mb-1">
                    <div class="card-header" id="heading-{{ $key }}" data-toggle="collapse"
                        data-target="#collapse{{ $key }}" aria-expanded="true"
                        aria-controls="collapse{{ $key }}">
                        <h2 class="mb-0">
                            <button class="btn btn-link text-primary" type="button"
                                style="box-shadow: none; text-decoration: none;">
                                {{ $faq['question'] }}
                            </button>
                        </h2>
                    </div>

                    <div id="collapse{{ $key }}" class="collapse {{ $key === 0 ? 'show' : '' }}"
                        aria-labelledby="heading-{{ $key }}" data-parent="#accordionExample">
                        <div class="card-body">
                            @if (isset($faq['answer']) && $faq['answer'])
                                <div class="py-4 px-3" style="background-color: #eaf1ff">
                                    {!! $faq['answer'] !!}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
    @endif
</span>
