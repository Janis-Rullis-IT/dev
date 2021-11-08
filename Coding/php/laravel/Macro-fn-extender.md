# [Macro-fn-extender.md](https://laracasts.com/series/laravel-explained/episodes/7)

Add a method to any class that uses Macroable trait. Like Collection does not have `second()` but we can make it.

```php
Colllection::macro(function() {
  return $this->items[1];
});

collect([1,2,3])->secnod();
```
> 2.
