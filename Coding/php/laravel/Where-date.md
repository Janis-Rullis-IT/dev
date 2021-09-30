# [laravel query for delete where date < now() with INTERVAL N days](https://stackoverflow.com/a/38796731)

```php
where('status', 'waiting')->whereRaw('`created_at` < NOW() - INTERVAL 3 HOUR');
```

## Passing caebon date
https://github.com/Janis-Rullis-IT/dev/blob/426123eb6ac49ff4ab5ca525dedbd879740f539e/Coding/php/laravel/Carbon-datetime.md
