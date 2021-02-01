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
