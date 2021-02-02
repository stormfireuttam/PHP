# The Seven Restful Controller Actions

In Laravel we basically provide the controller with seven functionality that helps us to use the database and create views for the functionalities associated to it.

We can use the command in cmd to create a resource controller ***php artisan make:controller [Name_Of_Controller] -r -m [Model_name]***

And what we get is something like
```
<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
```

# Form Handling

Created a form for creation of articles in the ***view > article > create.blade.php***
```
@extends ('layout')

@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
@endsection

@section ('content')
	<div id="wrapper">
		<div id="page" class="container">
			<h1 class="heading has-text-weight-bold is-size-4">New Article</h1>
			
			<form method="POST" action="/articles">
				{{ csrf_field() }}			
				<div class="field">
					<label class="label" for="title">Title</label>
					<div class="control">
						<input class="input" type="text" name="title" id="title">
					</div>
				</div>
				<div class="field">
					<label class="label" for="excerpt">Excerpt</label>
					<div class="control">
						<textarea class="input" name="excerpt" id="excerpt"></textarea>
					</div>
				</div>
				<div class="field">
					<label class="label" for="body">Body</label>
					<div class="control">
						<textarea class="input" name="body" id="body"></textarea>
					</div>
				</div>
				<div class="field is-grouped">
					<div class="control">
						<button class="button is-link" type="submit">Submit</button>
					</div>
				</div>
			</form>
		</div> 			
	</div>
@endsection
```
After this we set up the ArticlesController to handle the creation of article.
```
//Shows a view to create a new resource
    public function create() {
    	return view('articles.create');
    }

    //Persist the new resource
    public function store() {
    	// die('hello');
    	// dump(request()->all()); 
    	$article = new Article();

    	$article->title = request('title');
    	$article->excerpt = request('excerpt');
    	$article->body = request('body');
    	
    	$article->save();
    	return redirect("/articles");
    }
```
