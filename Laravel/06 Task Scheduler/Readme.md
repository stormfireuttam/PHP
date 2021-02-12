# Use Laravel Notifications and Schedule To Send Email Updates

I was assigned to a task to send email notification to all registered users when their thread has a new message and they weren’t able to read it. The solution was by sending them an email that has a list of all the messages that are posted not more than 1 hour on their thread.

Automatically it came to my mind to subscribe it to an event, but then since we need to send the email periodically and check for new messages and get only those messages that are posted within an hour in the thread, it would be hard for me to make it work.

Thankfully, laravel has other solution by using schedule. It allows you to fluently and expressively define your command schedule within Laravel itself. When using the scheduler, only a single Cron entry is needed on your server. Your task schedule is defined in the ```app/Console/Kernel.php``` file's schedulemethod. To help you get started, a simple example is defined within the method.

- Now let start with creating ***php artisan make:command SendReminderEmails*** then go to and open the file in ``app\Console\Commands\SendUserReminderEmail.php``.
- Then change the value of the **$signature** which is the command name of our artisan command and can also run in the terminal by typing **php artisan notification:unreadMessages** and **$description** a simple sentence to know what our command does.

