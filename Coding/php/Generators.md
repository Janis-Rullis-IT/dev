# [Generators.md](https://laracasts.com/series/laravel-explained/episodes/3)

> Solves the exceeding of a memory when working with large data sets.

# Instead of this

That puts all this data into memory.

```php
$items = range(1,1000000000);
```
# Use yield
> yield returns iterable not the whole array.

```php
function customRange($start, $end){
  for($i = $start; $i > $end; $i++){
    yield $i;
  }
}

foreach(customRange(1,1000000000) as $i){
  print $i;
}
```

# [Convert a regular laravel Componant to a lazy load](https://josephsilber.com/posts/2020/07/29/lazy-collections-in-laravel)

```php
$count = get_all_customers_from_quickbooks()
    ->lazy()
    ->where('country', 'FR')
    ->where('balance', '>', 100)
    ->count();
```

```php
foreach (Flight::lazy() as $flight) {
    //
}

foreach (Flight::where('destination', 'Zurich')->cursor() as $flight) {
    //
}
```
