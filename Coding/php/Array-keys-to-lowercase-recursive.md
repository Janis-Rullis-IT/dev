# [Array keys to lowercase recursive](http://php.net/manual/en/function.array-change-key-case.php#114914)

```php
static function array_change_key_case_recursive($arr)
{
	return array_map(function($item) {
		if (is_array($item))
			$item = static::array_change_key_case_recursive($item);
		return $item;
	}, array_change_key_case($arr));
}
```