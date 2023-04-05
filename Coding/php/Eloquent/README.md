# Eloquent
* [laravel/ORM-query](laravel/ORM-query).

## Avoid hydration with `->toBase()` 
* https://stackoverflow.com/a/43647855

```php
$users = User::toBase()->get();
```
