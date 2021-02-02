# Forms that submit PUT Requests

Changes in web.php
```
//to edit an article
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');
```
Changes in ArticlesController.php
```
    //Show a view to edit an existing resource
    public function edit($id) {
    	$article = Article::find($id);
    	return view('articles.edit', compact('article'));
    }

    //Persist the edited resource
    public function update($id) {
    	$article = Article::find($id);
    	$article->title = request('title');
    	$article->excerpt = request('excerpt');
    	$article->body = request('body');
    	$article->save();
    	return redirect("/articles/".$article->id);
    }
```
***edit.blade.php***
```
@extends ('layout')

@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
@endsection

@section ('content')
	<div id="wrapper">
		<div id="page" class="container">
			<h1 class="heading has-text-weight-bold is-size-4">Update Article</h1>
			
			<form method="POST" action="/articles/{{$article->id}}">
				{{ csrf_field() }}	
				{{method_field('PUT')}}		
				<div class="field">
					<label class="label" for="title">Title</label>
					<div class="control">
						<input class="input" type="text" name="title" id="title" value="{{$article->title}}">
					</div>
				</div>
				<div class="field">
					<label class="label" for="excerpt">Excerpt</label>
					<div class="control">
						<textarea class="input" name="excerpt" id="excerpt"> {{$article->excerpt}}</textarea>
					</div>
				</div>
				<div class="field">
					<label class="label" for="body">Body</label>
					<div class="control">
						<textarea class="input" name="body" id="body">{{$article->body}}</textarea>
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
