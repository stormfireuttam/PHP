# Form Validations

Editing the store function in the controller
```
public function store() { 
    	$article = new Article();

    	$this->validate(request(), [
        'title' => 'required|max:255',
        'excerpt' => 'required',
        'body' => 'required',
    	]);

    	$article->title = request('title');
    	$article->excerpt = request('excerpt');
    	$article->body = request('body');
    	
    	$article->save();
    	return redirect("/articles");
    }
```
Editing the form
```
<form method="POST" action="/articles">
  {{ csrf_field() }}			
  <div class="field">
    <label class="label" for="title">Title</label>
    <div class="control">
      <input class="input" type="text" name="title" id="title" value="{{old('title')}}">
      <p class="help is-danger">{{ $errors->first('title') }}</p>
    </div>
  </div>
  <div class="field">
    <label class="label" for="excerpt">Excerpt</label>
    <div class="control">
      <textarea class="input" name="excerpt" id="excerpt">{{old('excerpt')}}</textarea>
      <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
    </div>
  </div>
  <div class="field">
    <label class="label" for="body">Body</label>
    <div class="control">
      <textarea class="input" name="body" id="body">{{old('body')}}</textarea>
      <p class="help is-danger">{{ $errors->first('body') }}</p>
    </div>
  </div>
  <div class="field is-grouped">
    <div class="control">
      <button class="button is-link" type="submit">Submit</button>
    </div>
  </div>
</form>
```
