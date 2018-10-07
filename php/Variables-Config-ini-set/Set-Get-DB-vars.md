# Set / Get DB vars

* https://github.com/janis-rullis/sql/blob/master/mysql/Variables.md

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

---------

```php
		\DB::statement("SET GLOBAL `connect_timeout` = 315360"); // 5
//		\DB::statement("SET GLOBAL `connect_timeout` = 5"); // This resets to defs.

		\DB::statement("SET SESSION `wait_timeout` = 1000"); // 600
//		\DB::statement("SET SESSION `wait_timeout` = 600"); // This resets to defs.
		
		\DB::statement("SET SESSION `interactive_timeout` = 30800"); // 28800
//		\DB::statement("SET SESSION `interactive_timeout` = 28800"); // This resets to defs.

		\DB::statement("SET GLOBAL `max_allowed_packet` = 107374182"); // 4194304
//		\DB::statement("SET GLOBAL `max_allowed_packet` = 4194304"); // This resets to defs.
		
		\DB::statement("SET SESSION `net_read_timeout` = 100"); // 30
//		\DB::statement("SET SESSION `net_read_timeout` = 30"); // This resets to defs.
		
		\DB::statement("SET SESSION `net_write_timeout` = 100"); // 60s
//		\DB::statement("SET SESSION `net_write_timeout` = 60"); // This resets to defs.	
```
