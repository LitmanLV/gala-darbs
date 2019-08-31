<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// html fails ir jāstibī uz views mapi

Route::get('/', function () {

    return view('welcome');
});

Route::get('/test', function () {
    return view ('test');

});

Route::get('/test/blog', function () {
    /*$blogs = [
        [
            'id' => 1,
            'title' => 'Mans blogs',
            'body' => 'yolo'
        ],
        [
            'id' => 2,
            'title' => 'Mans blogs2',
            'body' => 'yolo2'
        ],
    ];*/

    $blogs = \App\Post::take(3)
        ->get();

    return view('blog', [
        'myblogs' => $blogs,
    ]);
});

Route::get('/test/blog', function () {
        /*$blogs = [
            [
                'id' => 1,
                'title' => 'Mans blogs',
                'body' => 'yolo'
            ],
            [
                'id' => 2,
                'title' => 'Mans blogs2',
                'body' => 'yolo2'
            ],
        ];*/

        $blogs = \App\Post::take(3)
            ->get();

        return view('blog', [
            'myblogs' => $blogs,
        ]);
});

Route::get('/test/blog/all', function () {
    $blogs = \App\Post::get();
    return view('all-blog', [
        'myblogs' => $blogs,
    ]);
});

Route::get('test/blog/{id}', function ($id) {
    $single_blog = \App\Post::find($id);
    if ($single_blog == null) {
        abort(404);
    }
    return view('single-blog', [
        'blog_post' => $single_blog,
    ]);
});


