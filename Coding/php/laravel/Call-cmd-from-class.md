# Call-cmd-from-class.md

```php
public static function cmd(){
    \Artisan::call('cache:clear', ['-h']);
    $ad = \Artisan::output();
    \Artisan::call('config:clear', ['-h']);
    $add = \Artisan::output();
    dd($ad, $add);
}
```

```
Description:\n
  Flush the application cache\n
\n
Usage:\n
  cache:clear [options] [--] [<store>]\n
\n
Arguments:\n
  store                 The name of the store you would like to clear\n
\n
Options:\n
      --tags[=TAGS]     The cache tags you would like to clear\n
  -h, --help            Display this help message\n
  -q, --quiet           Do not output any message\n
  -V, --version         Display this application version\n
      --ansi            Force ANSI output\n
      --no-ansi         Disable ANSI output\n
  -n, --no-interaction  Do not ask any interactive question\n
      --env[=ENV]       The environment the command should run under\n
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug\n
"""
^ """
Description:\n
  Remove the configuration cache file\n
\n
Usage:\n
  config:clear\n
\n
Options:\n
  -h, --help            Display this help message\n
  -q, --quiet           Do not output any message\n
  -V, --version         Display this application version\n
      --ansi            Force ANSI output\n
      --no-ansi         Disable ANSI output\n
  -n, --no-interaction  Do not ask any interactive question\n
      --env[=ENV]       The environment the command should run under\n
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug\n
```
