# Layout Pages

In Laravel we can embed our view pages inside an outer layout view page which will save us from writing the same html code again and again. Creating layout pages is very simple and the functionality can be achieved with the following steps..

Firstly create a ***layout.blade.php*** file in our views section and pick out the code you think will be common in most of the pages which can be a navbar or a side bar.
```
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        @yield ('content')
    </body>
</html>
```
As you can see in the above code we can insert the view for other files within this html code using the ***@yield ('content')*** tag.

And now lets have a look at how we will create our reusable views
```
@extends ('layout')

@section ('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                @endif
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Laravel
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Documentation</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>
    </div>
@endsection
```
So basically we will extend the layout using ***@extend ('layout')*** and then mark the start and end of section to be inserted using ***@section ('content')*** and ***@endsection***


#### We can use built in layout pages from [Templated](https://templated.co/)

# Setting Active Nav Links

```
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="css/default.css" rel="stylesheet"/>
<link href="css/fonts.css" rel="stylesheet"/>

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
	<div id="header-wrapper">
    <div id="header" class="container">
        <div id="logo">
            <h1><a href="/">SimpleWork</a></h1>
        </div>
        <div id="menu">
            <ul>
                <li class="{{Request::path() === '/' ? 'current_page_item' : ''}}">
                	<a href="/" accesskey="1" title="">Homepage</a>
                </li>
                <li class="{{Request::path() === 'clients' ? 'current_page_item' : ''}}">
                	<a href="/clients" accesskey="2" title="">Our Clients</a>
                </li>
                <li class="{{Request::is('about') ? 'current_page_item' : ''}}">
                	<a href="/about" accesskey="3" title="">About Us</a>
                </li>
                <li class="{{Request::path() === 'careers' ? 'current_page_item' : ''}}">
                	<a href="/careers" accesskey="4" title="">Careers</a>
                </li>
                <li class="{{Request::path() === 'contact' ? 'current_page_item' : ''}}">
                	<a href="/contact" accesskey="5" title="">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
    	@yield ('header')
</div>
	@yield ('content')
</body>
</html>
```
Here the code ***class="{{Request::path() === '/' ? 'current_page_item' : ''}}"*** which is used to set the class for active nav link based on the path. 

Another alternative for implementing the same functionality is ***class="{{Request::is('about') ? 'current_page_item' : ''}}"*** 


# Asset Compilation With Laravel Mix and Webpack

Laravel comes with out of the box webpack functionality.
```
let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

   mix.js('resources/assets/js/app.js', 'public/js');
   mix.sass('resources/assets/sass/app.scss', 'public/css');

```
So basically what webpack does is compile the files to be precompiled before the starting of server and store them or make changes in the respective folders as mentioned in the above code.

It may be the case that some of the functionalities have not been set up in your application so for those application you can simply install them using npm with the help of command
```
	npm install
```
After insatlling the dependencies you can compile your sass or js files usin the command ***npm run dev***. But if you want to make changes and check them along you can use the following command ***npm run watch***.


# Render Dynamic Data

After establishing connection with the database we can access the data and load it in our view.php
```
Route::get('/about', function () {
	// $article = App\Article::all(); 		Query to get all articles
	// $article = App\Article::latest()->get();	//Query to get articles on the basis of their creation time
	// $article = App\Article::take(3)->latest()->get();	
	//Query to get articles 3 articles on the basis of their creation time

	// return $article;

    return view('about', [
    	'articles' => App\Article::latest()->get()
    ]);
});
```
After passing the data to the view we can access the data using the blade functionality provided by laravel
```
<ul class="style1">
	@foreach($articles as $article)
	<li class="first">
	    <h3>{{ $article -> title}}</h3>
	    <p><a href="#">{{ $article -> excerpt}}</a></p>
	</li>
	@endforeach
</ul>
```
In the example above we can see how the data is rendered from the database.

Further we created view for all the articles by adding the following code to web.php
```
Route::get('/articles/{article}', 'ArticlesController@show');
```
Now for this we require the article controller which can be created using the command ***php artisan make:controller ArticlesController*** the code for the same is provided below
```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    public function show($id) {
    	$article = Article::find($id);
    	return view('articles.show', ['article' => $article]);
    }
}
```
So basically we access the article on the basis of the id passed and to create links to these articles we make changes in the about.blade.php file as well
```
<ul class="style1">
	@foreach($articles as $article)
	<li class="first">
	    <h3><a href="/articles/{{$article->id}}">{{ $article -> title}}</a></h3>
	    <p>{{ $article -> excerpt}}</p>
	</li>
	@endforeach
</ul>
```
