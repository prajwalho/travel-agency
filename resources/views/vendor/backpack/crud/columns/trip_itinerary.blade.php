<span>
    @if (!empty($entry->itinerary))
        <div class="accordion" id="accordionExample">
            @foreach ($entry->itinerary as $key => $itinerary)
                <div class="card mb-1">
                    <div class="card-header" id="heading-{{ $key }}" data-toggle="collapse"
                        data-target="#collapse{{ $key }}" aria-expanded="true"
                        aria-controls="collapse{{ $key }}">
                        <h2 class="mb-0">
                            <button class="btn btn-link text-primary" type="button"
                                style="box-shadow: none; text-decoration: none;">
                                <strong>Day {{ $itinerary['day'] }}:</strong> {{ $itinerary['title'] }}
                            </button>
                        </h2>
                    </div>

                    <div id="collapse{{ $key }}" class="collapse {{ $key === 0 ? 'show' : '' }}"
                        aria-labelledby="heading-{{ $key }}" data-parent="#accordionExample">
                        <div class="card-body">
                            {!! $itinerary['description'] !!}

                            @if ($itinerary['note'])
                                <div class="py-4 px-3 text-justify" style="background-color: #eaf1ff">
                                    <strong class="d-block text-danger">Note!</strong>
                                    {{ $itinerary['note'] }}
                                </div>
                            @endif

                            <div class="my-4">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <td>Location: </td>
                                            <td>
                                                {{ $itinerary['location'] ? $itinerary['location'] : '-' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Meal: </td>
                                            <td>
                                                {{ $itinerary['meal'] ? $itinerary['meal'] : '-' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Duration: </td>
                                            <td>
                                                {{ $itinerary['duration'] ? $itinerary['duration'] : '-' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Altitude Different: </td>
                                            <td>
                                                {{ $itinerary['max_altitude'] ? $itinerary['max_altitude'] : '-' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Accommodation: </td>
                                            <td>
                                                {{ $itinerary['accommodation'] ? $itinerary['accommodation'] : '-' }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
    @endif
</span>
