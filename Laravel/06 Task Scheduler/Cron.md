# What is Cronjob :

A Cronjob is Unix command for scheduling jobs to be executed in specific time and specific interval. For example we can schedule a task in the server that executes some scripts that sends out daily/weekly reports from our website. Mainly we are using the cron jobs to cleanup the databases, send the emails , execute time consuming tasks ….etc. If i want to delete some files from my database which is older than a month, I can simply do that using Cron Job. Cron job will not work with with windows based machines or servers as it will only work on unix based machines.

Cron has a configuration file called Crontable also known as Crontab which is used to manage the scheduling.These crontab consists of different Cronjobs and each CronJob is associated with a specific task. Cron Job mainly consists of two parts, a Cron expression and a shell command to be run.

The format of the Cron Scheduler is like this ```* * * * * command/to /run ```

ie,  minute, hour, day, month, day of the weak  in the place of * in the same order.

where :
```    
    Minute (0-59)
    Hour (0-23)
    Day of month (1-31)
    Month (1-12)
    Day of the week (0-6 starting on Sunday-0)
```
When any entity is replaced with asterisk then the CronJob have to perform for each minute or day or weak or month or day  of the weak according to where asterisk is placed.

# CronJob Samples :

  -  Every hour on the 5th minute of the hour.

          5 * * * * command-to – run

  -  Every hour on the 5th minute of the hour on mondays only.

          5 * * * 1 command-to- run

  - You can also run the cron job at an interval of time, let’s say every 10 minutes. For that  you need to give this format (asterisk divide by number):

          */10 * * * * command- to – run
