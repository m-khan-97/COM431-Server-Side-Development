<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Manager',
                'salary' => '$50000'
            ],
            [
                'id' => 2,
                'title' => 'Engineer',
                'salary' => '$40000'
            ],
            [
                'id' => 3,
                'title' => 'Technician',
                'salary' => '$32000'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Manager',
            'salary' => '$50,000'
        ],
        [
            'id' => 2,
            'title' => 'Engineer',
            'salary' => '$40,000'
        ],
        [
            'id' => 3,
            'title' => 'Assisstant',
            'salary' => '$30,000'
        ]
    ];

    $job = \Illuminate\Support\Arr::first($jobs, function ($job) use ($id) {
        return $job['id'] == $id;
    });

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
