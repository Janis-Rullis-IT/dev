# Transactions.md

```php
try{

  \DB::beginTransaction();

  $user->save();
  $bag->user_id = $user->id;
  $bag->save();

  \DB::commit();
} catch (\Exception $e) {
    \DB::rollBack();
    throw $e;
}
```
