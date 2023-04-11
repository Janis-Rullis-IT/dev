# NULL-with-NOT-IN

```php
->where(function($query) {
	$query->whereNotIn('fruits.name', ['apple', 'banana'])->orWhereNull('fruits.name');
})
```