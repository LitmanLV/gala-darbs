<?php
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormSent;

Route::get('/', function () {

    return view('welcome');
});

Route::get('/test/contacts', function () {

    return view('contact-me');
});
Route::post('/test/contacts/submit', function(Request $request) {
    $posted = $request->all();

    $validator = Validator::make($posted, [
        'email'=> 'required|email',
        'temats'  => 'required',
        'message_body' => 'required',
    ]);
    if ($validator->fails()) {
        return redirect('/test/contacts')
                    ->withErrors($validator)
                    ->withInput();
    }

    Mail::to('litadubrova@gmail.com')
    ->send(new FormSent($posted));

    return redirect('/test/contacts')->with('success', 'Ziņa nosūtīta!');
});
Route::get('/test', function () {
    return view ('test', [
        "enter_url" => url('/test/blog')
    ]);
});

Route::get('/test/blog', function () {
    $blogs = \App\Post::orderBy('created_at', 'desc')
        ->get();

    $random_blogs = \App\Post::orderByRaw('RAND()')
    ->take(6)
    ->get();

    return view('blog', [
        'myblogs' => $blogs,
        'randomBlogs' => $random_blogs
        //'lastitem' => $lastitem,
    ]);
});

Route::get('/test/blog/all', function () {
    $blogs = \App\Post::get();
    $lastitem = $blogs->pop();
    return view('all-blog', [
        'myblogs' => $blogs,
        'lastitem' => $lastitem,
        ]);
});

Route::get('/test/blog/create', function() {
    return view ('create-blog');
})->middleware('auth');

Route::post('/test/blog/create/submit', function(Request $request) {

    //Mail::to('litadubrova@gmail.com')
    //->send(new FormSent($request->all()));

    $validator = Validator::make($request->all(), [
        'title'    => 'required|unique:posts|max:250',
        'picture'  => 'required',
        'body'     => 'required',
        'excerpt'  => 'required',
        'author'   => 'required',
        'slug'     => 'required',
    ]);
    if ($validator->fails()) {
        return redirect('/test/blog/create')
                    ->withErrors($validator)
                    ->withInput();

    }
    $posted = $request->all();
    $imagePath = $request->file('picture')->store('public');


    $post = new Post;
    $post->title    = $posted['title'];
    $post->img      = $imagePath;
    $post->body     = $posted['body'];
    $post->excerpt  = $posted['excerpt'];
    $post->author   = $posted['author'];
    $post->slug     = $posted['slug'];
    $post->save();
    return redirect('/test/blog/create')->with('success', 'Ieraksts saglabāts');
})->middleware('auth');

Route::get('test/blog/{id}', function ($id) {
    $single_blog = \App\Post::find($id);

    $random_blogs = \App\Post::orderByRaw('RAND()')
    ->where('id', '!=', $id)
    ->take(3)
    ->get();

    if ($single_blog == null) {
        abort(404);
    }
    return view('single-blog', [
        'blog_post' => $single_blog,
        'random_blogs' => $random_blogs
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test/api/blog', function () {
    $blogs = Post::orderBy('created_at', 'desc')
        ->take(4)
        ->get();
    return $blogs;
});
