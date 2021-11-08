# [Throttle-middleware.md](https://laracasts.com/series/laravel-explained/episodes/8)

```php
Route::get('downlaods/1','DwController@show')->middleware(['auth','throttle:3,1']);
```
> 3 requests per 1 minute.
