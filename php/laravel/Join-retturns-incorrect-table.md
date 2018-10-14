# Join-retturns-incorrect-table

## For example

If you want to get the user of a cat called Pig.

```php
\DB::table('users')
        ->join('cats', 'users.cat_id', '=', 'cats.id')
        ->where('cat.name','Pig')
        ->first();
```
> Returns one row with a cat (no user though).

## To return the user

You must define the select fields


```php
\DB::table('users')
        ->select(['users.*])
        ->join('cats', 'users.cat_id', '=', 'cats.id')
        ->where('cat.name','Pig')
        ->first();
```