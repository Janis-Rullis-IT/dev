## Laravel CRON / schedule command execution

* app/Console/Kernel.php::schedule

```php
$schedule->command('your-command:start')->everyFiveMinutes();
```