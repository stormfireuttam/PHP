# Use Laravel Notifications and Schedule To Send Email Updates

I was assigned to a task to send email notification to all registered users when their thread has a new message and they weren’t able to read it. The solution was by sending them an email that has a list of all the messages that are posted not more than 1 hour on their thread.

Automatically it came to my mind to subscribe it to an event, but then since we need to send the email periodically and check for new messages and get only those messages that are posted within an hour in the thread, it would be hard for me to make it work.

Thankfully, laravel has other solution by using schedule. It allows you to fluently and expressively define your command schedule within Laravel itself. When using the scheduler, only a single Cron entry is needed on your server. Your task schedule is defined in the ```app/Console/Kernel.php``` file's schedulemethod. To help you get started, a simple example is defined within the method.

- Now let start with creating ***php artisan make:command SendReminderEmails*** then go to and open the file in ``app\Console\Commands\SendUserReminderEmail.php``.
- Then change the value of the **$signature** which is the command name of our artisan command and can also run in the terminal by typing **php artisan notification:unreadMessages** and **$description** a simple sentence to know what our command does.

## Cron

Cron is a time-based task scheduler in Unix/Linux operating systems. It runs shell commands at a pre-specified time period. Cron uses a configuration file called crontab also known as Cron table to manage the task scheduling process.

Crontab contains all the Cron jobs related to a specific task. Cron jobs are composed of two parts, the Cron expression, and a shell command that needs to be run.

``* * * * * command/to/run``

In the Cron expression above (* * * * *), each field is an option for determining the task schedule frequency. These options represent minute, hour, day of the month, month and day of the week in the given order. Asterisk symbol means all possible values. So, the above command will run every minute.

The Cron job below will be executed at 6:20 on 10th of every month.

``20 6 10 * * command/to/run``

You can learn more about Cron job on Wikipedia. However, Laravel Cron Job Scheduling makes the whole process very easy.

## Laravel Cron Job

Laravel Cron Job is an inbuilt task manager that gives your applications the ability to execute specific commands like sending a slack notification or removing inactive users at a periodic time. We will be using the latest version of Laravel, which is 5.6 at the time of writing this article.

You need a Linux Operating System to run Cron Jobs. This tutorial also assumes a fair knowledge of PHP and Laravel.

### 1)Creating a new Project

In this tutorial, we will create a simple laravel application to demonstrate task scheduling. Create a new Laravel project by running the following command.

```composer create-project --prefer-dist laravel/laravel cron```

### 2)Create your Scheduled Task in Laravel

There are different ways you can define scheduled tasks in laravel. Let’s go through each of them to understand how they can be implemented in Laravel.

### 3)Create New Artisan Command

cd into your project and run the following command to create a new artisan command class:

**php artisan make:command WordOfTheDay**

The above command will create a new command file, WordOfTheDay.php, in the app/Console/Commands directory. Navigate to the file and you will find the following code in it:
```
<?php
 
namespace App\Console\Commands;
 
use Illuminate\Console\Command;
 
class WordOfTheDay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';
 
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
 
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
 
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
    }
}
```

In this code, the following line contains the name and the signature of the command.
```
protected $signature = 'command:name';
```
Replace the words command:name with word:day. This is what we will call this when running the command to perform the task.
```	
protected $signature = 'word:day';
```
Above code also contains the description property. This is where you place the actual description of what this command will do. Description will be shown when the Artisan list command is executed alongside the signature. Change the description of the command to:
```
protected $description = 'Send a Daily email to all users with a word and its meaning';
```
Handle method is called whenever the command is executed. This is where we place the code for doing the specific task. This is how the WordOfTheDay.php file looks with the handle method and all other changes in place:
```
<?php
 
namespace App\Console\Commands;
 
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
 
class WordOfTheDay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'word:day';
     
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a Daily email to all users with a word and its meaning';
     
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
     
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $words = [
            'aberration' => 'a state or condition markedly different from the norm',
            'convivial' => 'occupied with or fond of the pleasures of good company',
            'diaphanous' => 'so thin as to transmit light',
            'elegy' => 'a mournful poem; a lament for the dead',
            'ostensible' => 'appearing as such but not necessarily so'
        ];
         
        // Finding a random word
        $key = array_rand($words);
        $value = $words[$key];
         
        $users = User::all();
        foreach ($users as $user) {
            Mail::raw("{$key} -> {$value}", function ($mail) use ($user) {
                $mail->from('info@tutsforweb.com');
                $mail->to($user->email)
                    ->subject('Word of the Day');
            });
        }
         
        $this->info('Word of the Day sent to All Users');
    }
}
```
Above code will select a random word from the array and send emails to every user with the word.

### 4)Registering the Command

Now that you have created the command, you will need to register it in the Kernel.

Go to app/Console/Kernel.php file that looks like this
```
<?php
 
namespace App\Console;
 
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
 
class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];
 
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
    }
 
    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
 
        require base_path('routes/console.php');
    }
}
```
In this file, we register the command class in the commands property and we schedule commands to be executed at periodic intervals in the schedule method. This is where we handle all the Cron Jobs in Laravel.

Change this file with the contents below. We have simply added our WordOfTheDay class to the commands property and schedule it to run every day.
```
<?php
 
namespace App\Console;
 
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
 
class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\WordOfTheDay::class,
    ];
 
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('word:day')
            ->daily();
    }
 
    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
 
        require base_path('routes/console.php');
    }
}
```
Now, if you run the php artisan list command in the terminal, you will see your command has been registered. You will be able to see the command name with the signature and description.

### 5)Laravel Cron Job Command

Setup, database and mail credentials in the .env file and make sure you have users in the database. Execute the command itself on the terminal:

```php artisan word:day```

Command will be executed with the signature that is placed in protected $signature = 'command:name'. You will also see the log message in the terminal.
