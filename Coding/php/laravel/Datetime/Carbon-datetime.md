# Carbon-datetime.md

## Subtract

```php
$hours = 48;
Carbon::parse('2020-02-03 04:05')->subHours($hours)->toDateTimeString();
```

## Diff

```php
Carbon::parse('2020-02-03 04:05')->diffInHours(Carbon::now());
$inSelectedPeriod = $diff <= $hours;
return $inSelectedPeriod;
```

## Fix data missing

```php
// [Fix 'Data missing' error](https://stackoverflow.com/a/41435235)
$value = '2020-02-03 04:05';
Carbon::parse($value)->toDateTimeString();
```
>  '2020-02-03 04:05:00'

## Yesterday

```php
$date = $date ?? \Carbon\Carbon::yesterday();
User::where('created_at', '<=', $date);
```
