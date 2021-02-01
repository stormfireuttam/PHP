# Installing Laravel

Follow the steps to install Laravel:

1. First install and set up [Xampp Server](https://www.apachefriends.org/download.html)
2. After setting up Xampp, install [PHP](https://www.apachelounge.com/viewtopic.php?t=6359). In my case I had to install PHP v7.0 as I had to use Laravel 5.4 which is supported by PHP v7.0 only. 
3. After installing PHP. Install [Composer](https://getcomposer.org/download/) and don't use the developer mode as it will make a bit difficult to uninstall Composer and while installing Composer don't set up the proxy server.
4. After setting up composer. Open cmd and run the following command
```
composer global require "laravel/installer"
```
5. After you are done with installing Laravel you can simply create a project using the following command:
```
composer create-project --prefer-dist laravel/laravel blog "5.4.*"
```

# Starting with Laravel

1. To set up the server for using Laravel use the command
```
php artisan serve
```
2. Now you can access you project at [Localhost](localhost:8000/)
3. The First page shown on using the mentioned link above is the controller situated in ***routes > web.php*** and its view file can be found at ***resources > views > welcome.blade.php**
4. Laravel makes use of a controller which redirects user to the view associated to it
```
Route::get('/', function () {
    return view('welcome');
});
```
