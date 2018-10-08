# laravel query for delete where date < now() with INTERVAL N days

```php
where('status', 'waiting')->whereRaw('`created_at` < NOW() - INTERVAL 3 HOURS');
```