# Carbon-datetime.md

```php
// [Fix 'Data missing' error](https://stackoverflow.com/a/41435235)
$value = '2020-02-03 04:05';
Carbon::parse($value)->toDateTimeString();
```
>  '2020-02-03 04:05:00'

```php
$date = $date ?? \Carbon\Carbon::yesterday();
User::where('created_at', '<=', $date);
```
