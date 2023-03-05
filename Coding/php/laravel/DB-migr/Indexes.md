# DB migr

## Naming
Try to use a globally unique index name (if You define one) as there are DBs like sqlite and db2 that have them globally and will fail if mysql prepared migrations are exec on them.

## Has an index?

```php
$sm = Schema::getConnection()->getDoctrineSchemaManager();
$doctrineTable = $sm->listTableDetails('GreenApples');
dd($doctrineTable->hasIndex('UniqueGreenApples'));
```
> true

Also could use `$doctrineTable = $sm->listTableIndexes('GreenApples');` but it would return an array where keys are in a normalized format (lowercase, probably something else)).
