# Delete-from-related

* Sometimes for relations could appear the 'ambigious updated_at' error, which is fixed in laravel 5.8. So the workaround could be deleting by IDs (if not many IDs).

```php
public static function getUserFruits($user)
{
	return $user->select('fruits.id')->join('fruits', 'fruits.user_id', '=', 'user.id')->get();
}

public static function removeAllFruits($user)
{
	$list = static::getUserFruits($user);
	if (empty($list)) {
		return null;
	}

	$ids = $list->keyBy('id')->toArray();
	if (empty($ids)) {
		return null;
	}

	return Fruits::whereIn('id', array_keys($ids))->delete();
}
```