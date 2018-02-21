<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


use App\Category;

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/', 'IndexController@index');

Route::group(['middleware'=>'admin'], function(){

    Route::get('/admin', function(){

        return view('admin.index');


    });



    Route::resource('admin/users', 'AdminUsersController',['names'=>[


        'index'=>'admin.users.index',
        'create'=>'admin.users.create',
        'store'=>'admin.users.store',
        'edit'=>'admin.users.edit'






    ]]);



    Route::resource('admin/posts', 'AdminPostsController',['names'=>[

        'index'=>'admin.posts.index',
        'create'=>'admin.posts.create',
        'store'=>'admin.posts.store',
        'edit'=>'admin.posts.edit'





    ]]);


    Route::resource('admin/categories', 'AdminCategoriesController',['names'=>[


        'index'=>'admin.categories.index',
        'create'=>'admin.categories.create',
        'store'=>'admin.categories.store',
        'edit'=>'admin.categories.edit'


    ]]);



    Route::resource('admin/media', 'AdminMediasController',['names'=>[

        'index'=>'admin.media.index',
        'create'=>'admin.media.create',
        'store'=>'admin.media.store',
        'edit'=>'admin.media.edit'


    ]]);


    Route::delete('admin/delete/media', 'AdminMediasController@deleteMedia');


    Route::resource('admin/comments', 'PostCommentsController',['names'=>[


        'index'=>'admin.comments.index',
        'create'=>'admin.comments.create',
        'store'=>'admin.comments.store',
        'edit'=>'admin.comments.edit',
        'show'=>'admin.comments.show'


    ]]);


    Route::resource('admin/comment/replies', 'CommentRepliesController',['names'=>[



        'index'=>'admin.comment.replies.index',
        'create'=>'admin.comment.replies.create',
        'store'=>'admin.comment.replies.store',
        'edit'=>'admin.comment.replies.edit',
        'show'=>'admin.comment.replies.show'


    ]]);






});


Route::get('/post/{slug}', ['as'=>'home.post', 'uses'=>'AdminPostsController@post']);


Route::get('/all_posts/{slug}', ['as'=>'all_posts', 'uses'=>'AdminPostsController@all_posts']);


Route::resource('/contact', 'AdminContactController',['names'=>[


    'index'=>'contact.index',
    'store'=>'contact.store',



]]);

Route::resource('/search', 'SearchController',['names'=>[


    'show' => 'show.search',



]]);


Route::get('/contact', function(){

    return view('contact');


});



Route::get('search', function(){

    return view('search');


});

Route::get('emails/contact', function(){

    return view('emails.contact');


});

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');


Route::get('/getRequest', function(){

    if(Request::ajax()){

        return 'getRequest completed';

    }

});




Route::post('/register', function(){

   if(Request::ajax()){

       return var_dump(Response::json(Request::all()));

   }

});

