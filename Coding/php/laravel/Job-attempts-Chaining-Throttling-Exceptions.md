# [Job-attempts-Throttling-Exceptions.md](https://laravel.com/docs/8.x/queues#throttling-exceptions)

```php
use Illuminate\Queue\Middleware\ThrottlesExceptions;

/**
 * Get the middleware the job should pass through.
 *
 * @return array
 */
public function middleware()
{
    return [new ThrottlesExceptions(10, 5)];
}

/**
 * Determine the time at which the job should timeout.
 *
 * @return \DateTime
 */
public function retryUntil()
{
    return now()->addMinutes(5);
}
```

# [Chain like in a transaction](https://laravel.com/docs/8.x/queues#throttling-exceptions)

If one fails, next ones won' be executed.

```php
Bus::chain([
    new ProcessPodcast,
    new OptimizePodcast,
    new ReleasePodcast,
])->dispatch();
```
