# Pass Request Data to Views

In Laravel we can request for data through the controller and pass the data to the view as well and that to in a very simple way. Below is an example illustrating the same

This is the code inside web.php which serves the purpose of sending the data to the views 
```
Route::get('/test', function () {
   $name = request('name');
//   return $name;
   return view('test', [
       'name' => $name
   ]); 
});
```
Now inside views we can access the data using any one of the two given below:
- ```<?= $name; ?>```
- ```{{  $name  }}```
