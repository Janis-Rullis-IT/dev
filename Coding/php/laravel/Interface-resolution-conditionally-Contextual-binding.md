# [Interface-resolution-conditionally-Contextual-binding.md](https://laravel.com/docs/8.x/container#contextual-binding)

```php
$this->app->when(PhotoController::class)
          ->needs(Filesystem::class)
          ->give(function () {
              return Storage::disk('local');
          });

$this->app->when([VideoController::class, UploadController::class])
          ->needs(Filesystem::class)
          ->give(function () {
              return Storage::disk('s3');
          });
```

# Also pass or convert data

```php
$this->app->when('App\Http\Controllers\UserController')
          ->needs('$variableName')
          ->give($value);
          
$this->app->when(ReportAggregator::class)
    ->needs('$reports')
    ->giveTagged('reports');
    
$this->app->when(ReportAggregator::class)
    ->needs('$timezone')
    ->giveConfig('app.timezone');
```
