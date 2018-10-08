# [laravel query for delete where date < now() with INTERVAL N days](https://stackoverflow.com/a/38796731)

```php
where('status', 'waiting')->whereRaw('`created_at` < NOW() - INTERVAL 3 HOURS');
```