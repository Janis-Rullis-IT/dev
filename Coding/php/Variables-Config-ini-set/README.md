# ini_set

```php
ini_set('max_execution_time', 0);
ini_set('memory_limit', '-1');
ini_set('output_buffering', 0);

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
```

## `max_input_time` is only affected from cfg

Set `set max_input_time = -1` in php.ini:

```shell
nano /etc/php/7.0/fpm/php.ini
service php7.0-fpm restart
```