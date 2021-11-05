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

