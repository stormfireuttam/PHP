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

# Migrations

In Laravel we don't need to set up database by going into MYSQL and creating a new table instead Laravel provides us with facility of Migrations to help us out and set up our tables in the database.

1. Firstly to create a migration we use the following command
```
php artisan make:migration create_posts_table
```
2. After the migration is created we set up the required columns for our table. Below is a typical example of a migration table and its columns
```
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug');
            $table->text('body');
            $table->timestamp('created_at');
            $table->timestamp('published_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}

```
In the above code we can see two functions up() and down(). The up() function is used to create the table and set up the various columns for the table whereas the down() function is used to drop the existing table or simply roll back the changes created by the up() function.

3. Now after setting up the columns we can make it come to action and create tables for our database by using the command
```
	php artisan migrate
```
4. Other than creating tables we can also add up columns to our existing table using command in cmd
```
	php artisan make:migration add_title_to_posts_table
```
This command will add title column to the posts table and we set up the code for it in the following way
```
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTitleToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function(Blueprint $table){
            $table->string('title');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function(Blueprint $table){
            $table->dropColumn('title');
        });
    }
}
```
After we are done you know the command very well just simply ***php artisan migrate*** and you are done.
If you want to rollback the changes created during the last migrate simply use the command ***php artisan migrate:rollback***
