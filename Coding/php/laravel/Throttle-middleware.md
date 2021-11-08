# [Throttle-middleware.md](https://laracasts.com/series/laravel-explained/episodes/8)

```php
Route::get('downlaods/1','DwController@show')->middleware(['auth','throttle:3,1']);
```
> 3 requests per 1 minute.

## `throttle:download_limit,1`

Looks inside `users.downlaod_limit` field or this method:

```php
class User{

  funciton getDownloadLimitAttribute()
    return 10;
  }
}
