# [Supervisor](https://laravel.com/docs/8.x/queues#installing-supervisor)

Linxu process that restarts the queue-worker if it dies.

# [Monitor](https://laravel.com/docs/8.x/queues#monitoring-your-queues)

```shell
php artisan queue:monitor redis:default,redis:deployments --max=100
```

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

# [Attempts and timeouts](https://laravel.com/docs/8.x/queues#max-job-attempts-and-timeout)

```shell
php artisan queue:work --tries=3
```

```php
class ProcessPodcast implements ShouldQueue
{
    public $tries = 5;
}
// or
public function retryUntil()
{
    return now()->addMinutes(10);
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

# [Stop if the batch has failed](https://laravel.com/docs/8.x/queues#dispatching-batches)

```php
use App\Jobs\ImportCsv;
use Illuminate\Bus\Batch;
use Illuminate\Support\Facades\Bus;
use Throwable;

$batch = Bus::batch([
    new ImportCsv(1, 100),
    new ImportCsv(101, 200),
    new ImportCsv(201, 300),
    new ImportCsv(301, 400),
    new ImportCsv(401, 500),
])->then(function (Batch $batch) {
    // All jobs completed successfully...
})->catch(function (Batch $batch, Throwable $e) {
    // First batch job failure detected...
})->finally(function (Batch $batch) {
    // The batch has finished executing...
})->dispatch();

return $batch->id;
```

```php
class ImportCsv implements ShouldQueue
{
    use Batchable, Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if ($this->batch()->cancelled()) {
            // Determine if the batch has been cancelled...

            return;
        }

        // Import a portion of the CSV file...
    }
}
```
