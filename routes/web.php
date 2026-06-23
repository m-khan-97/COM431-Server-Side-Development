<?php

use Illuminate\Support\Facades\Route;

class Job
{
    public static function all(): array
    {
        return [
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
        ];
    }
}

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = \Illuminate\Support\Arr::first(Job::all(), function ($job) use ($id) {
        return $job['id'] == $id;
    });

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
