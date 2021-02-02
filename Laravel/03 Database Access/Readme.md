# Setup a Database Connection

1. Make changes in the .env file and set the variables for DB as per the credentials of your database. Basically you need to make changes in 
```
DB_DATABASE=laravel6
DB_USERNAME=root
DB_PASSWORD=
```
2. Other than this track the php.ini file used by your composer and find ***pdo_mysql*** and uncomment it.
3. Use command php artisan migrate to set up your database
4. As mentioned in the tutorial I established connection with my database using the statement 
```
     	$post = \DB::table('posts')->where('slug',$slug)->first();
```
and returned to the view the data fetched from the database
```
return view('post', [
           'post' => $post 
        ]);
```
and this is how we access it in view
```
<!DOCTYPE html>
<html>
<head>
	<title>Post</title>
</head>
<body>
	<h1>This is a post</h1>
	<h2>{{ $post->body }}</h2>
</body>
</html>
```

# Eloquent Model

1. To set up an Eloquent Model we can simply use the following cmd command
```
 php artisan make:model [name of your model]
```
2. We can use the model in our controller by simply importing it
```
	use App\[name of your model];
```
3. It saves the code for connecting to db as the code will get simplified to
```
     	$post = Post::where('slug',$slug)->firstOrFail();
```
