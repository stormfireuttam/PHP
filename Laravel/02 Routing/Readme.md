# Pass Request Data to Views

In Laravel we can request for data through the controller and pass the data to the view as well and that to in a very simple way. Below is an example illustrating the same

This is the code inside web.php which serves the purpose of sending the data to the views 
```
Route::get('/test', function () {
   $name = request('name');
   return view('test', [
       'name' => $name
   ]); 
});
```
Or
```
Route::get('/test', function () {
   return view('test', [
       'name' => request('name')
   ]); 
});
```
Now inside views we can access the data using any one of the following given below:
- ```<?= $name; ?>``` Basic Php
- ```{{  $name  }}``` It treats everything inside as message
- ```{!! $name !!}``` It can be used to embed html and js code

## Using wildcards

```
Route::get('/posts/{post}', function($post){ 
    return $post;
});
```
If the post acts as a key for our posts array
```
//Using wildcards
Route::get('/posts/{post}', function($post){ 
    $posts = [
        "my-first-post" => 'Hello, this is my first blog post',
        "my-second-post" => 'I am loving it'
    ];
    return view('post', [
       'post' => $posts[$post] ?? 'Nothing here yet.' 
    ]);
});
```
Or to redirect to 404 page we could do something like
```
if(!array_key_exists($post, $posts)) {
        abort(404, 'Sorry that post was not found!');
    }
```
