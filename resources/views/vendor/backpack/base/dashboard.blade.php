@extends(backpack_view('blank'))

@php
    $widgets['before_content'][] = [
        'type' => 'alert',
        'class' => '',
        'heading' => '<h1>Welcome! <strong><span class="text-primary" style="font-size: 1.75rem">' . backpack_user()->name . '</span></strong></h1>',
    ];

    $totalSliders = $totalSliders ?? '';
    $totalPages = $totalPages ?? '';
    $totalTrips = $totalTrips ?? '';
    $totalArticles = $totalArticles ?? '';
    $totalClients = $totalClients ?? '';

    $widgets['before_content'][] = [
        'type' => 'container',
        'content' => [
            // widgets
            // Slider
            [
                'type' => 'stat_card',
                'class' => 'col-12 col-sm-6 col-md-4 col-xl-3',
                'content' => [
                    'body' => [
                        'class' => 'stat_widget_info bg__lorg',
                        'header' => '<a href="' . backpack_url('slider') . '">Total Sliders</a>',
                        'stat' => $totalSliders,
                        'icon' => [
                            'class' => 'stat_icon bg-notice',
                            'content' => '<i class="fa-solid fa-sliders"></i>',
                        ],
                    ],
                ],
            ],
            // Page
            [
                'type' => 'stat_card',
                'class' => 'col-12 col-sm-6 col-md-4 col-xl-3',
                'content' => [
                    'body' => [
                        'class' => 'stat_widget_info bg__sky',
                        'header' => '<a href="' . backpack_url('page') . '">Total Pages</a>',
                        'stat' => $totalPages,
                        'icon' => [
                            'class' => 'stat_icon bg-success',
                            'content' => '<i class="fa-solid fa-file"></i>',
                        ],
                    ],
                ],
            ],
            // Trip
            [
                'type' => 'stat_card',
                'class' => 'col-12 col-sm-6 col-md-4 col-xl-3',
                'content' => [
                    'body' => [
                        'class' => 'stat_widget_info bg__lblue',
                        'header' => '<a href="' . backpack_url('trip') . '">Total Trips</a>',
                        'stat' => $totalTrips,
                        'icon' => [
                            'class' => 'stat_icon bg-primary',
                            'content' => '<i class="las la-route"></i>',
                        ],
                    ],
                ],
            ],
            // Article
            [
                'type' => 'stat_card',
                'class' => 'col-12 col-sm-6 col-md-4 col-xl-3',
                'content' => [
                    'body' => [
                        'class' => 'stat_widget_info bg__lcyan',
                        'header' => '<a href="' . backpack_url('article') . '">Total Articles</a>',
                        'stat' => $totalArticles,
                        'icon' => [
                            'class' => 'stat_icon bg-danger',
                            'content' => '<i class="la la-newspaper-o"></i>',
                        ],
                    ],
                ],
            ],
            // Client
            [
                'type' => 'stat_card',
                'class' => 'col-12 col-sm-6 col-md-4 col-xl-3',
                'content' => [
                    'body' => [
                        'class' => 'stat_widget_info bg__pink',
                        'header' => '<a href="' . backpack_url('client') . '">Total Clients</a>',
                        'stat' => $totalClients,
                        'icon' => [
                            'class' => 'stat_icon bg-dark',
                            'content' => '<i class="las la-clone"></i>',
                        ],
                    ],
                ],
            ],
        ],
    ];
@endphp

@section('content')
@endsection
