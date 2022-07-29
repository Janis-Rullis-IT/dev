# HTML-sanitization-purification.md

* [HTMLPurifier for Laravel 5/6/7/8/9](https://github.com/mewebstudio/Purifier)

```shell
composer require mews/purifier
```

```php
$a = "<span style='color:red;' onclick=\"alert('y');\" >js test</span><script>alert('n');</script>";
$a = clean($a);
echo($a);
return;
```

## Without `clean()`
First appears an alert 'n' then a red text that shows an alert when clicked on.

## With `clean()`

`<span style="color:#FF0000;">js test</span>`, no js scripts attached.
