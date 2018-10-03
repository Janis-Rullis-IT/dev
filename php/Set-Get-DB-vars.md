# Set / Get DB vars

Add anywhere in the code.

## Set

```php
\DB::statement("SET SESSION time_zone = 'xxxx'");
```
> Will raise "General error: 1298 Unknown or incorrect time zone: 'xxxx'".

```php
\DB::statement("SET GLOBAL connect_timeout = 1");
```

## Get

```php
\DB::select("SELECT @@GLOBAL.connect_timeout;");
```
> 1