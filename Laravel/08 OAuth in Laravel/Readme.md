# Oauth

Oauth is an open-standard authorization protocol or framework

Oauth doesn't share password data but instead uses authorization tokens between consumers and service providers

The examples of OAuth are Facebook and other authentications

 * Step 1: You visit a website
 * Step 2: Join us using any of these service providers
 * Step 3: You are redirected to the selected service provider.
 * Step 4: You are given permission
 
# Setting Up OAuth for Laravel 5.4

**Installing Passport for Laravel**
 * Step 1: composer require paragonie/random_compat=~2.0
 * Step 2: composer require laravel/passport=~4.0
 
**Setting up passport for our project**
 * Step 1:  register the Passport service provider in the providers array of your config/app.php configuration file:
```
Laravel\Passport\PassportServiceProvider::class,
 ```
 * Step 2: php artisan migrate
 * Step 3: php artisan passport:install
 * Step 4: After running this command, add the **Laravel\Passport\HasApiTokens** trait to your **App\User** model. This trait will provide a few helper methods to your model which allow you to inspect the authenticated user's token and scopes:
```
<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
}
```
 * Step 5: Next, you should call the Passport::routes method within the boot method of your AuthServiceProvider. This method will register the routes necessary to issue access tokens and revoke access tokens, clients, and personal access tokens:
```
<?php

namespace App\Providers;

use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();
    }
}
```
  * Step 6: Finally, in your config/auth.php configuration file, you should set the driver option of the api authentication guard to passport. This will instruct your application to use Passport's TokenGuard when authenticating incoming API requests:
```
'guards' => [
    'web' => [
        'driver' => 'session',
        'provider' => 'users',
    ],

    'api' => [
        'driver' => 'passport',
        'provider' => 'users',
    ],
],
```
