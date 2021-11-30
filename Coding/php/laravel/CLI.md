# CLI.md

* `{--name=} {--case-sensitive}';` without = is a boolean. 
* https://laravel.com/docs/6.x/artisan#progressbars

## Optional

```php
protected $signature = "abc {--limit= : You should limit this flock!}"
$this->limit = $this->option('limit') ? (int)$this->option('limit') : null;
```
> `abc` or `abc--limit=10`.
OR

```php
protected $signature = "abc {limit?} : You should limit this flock!}"
$this->limit = $this->argument('limit');
```
> `abc` or `abc limit=10`.
