# Which DB engine?

```php
$isSQLite = Schema::getConnection()->getName() === 'sqlite';
```

A side rant regarding using SqlLite or other DB engine for tests when Your prod DB is different
IY'S A BAD IDEA!
SQLite is ofc fast and supports parallel execution but it works differently and so will give false positives. You might deliver a breaking feature because
tests were working fine. And it does not matter if the local-non-testing DB is the same as on the prod, because regukar use (oush few data requests)
rarely is as thorough as You cover in tests.

So SQLite differences I stumbled on (there are nmany others):
> These are true also for PosrgreSQL.
* Indexes are stored in globally namespace, which means index names must be unique across the DB and not hte table.
* Index name can not be the same as the table name as it will end up in naming conflict.

### References
* https://sqlite.org/forum/forumpost/e8e229c9747d6cb9
* https://www.drupal.org/project/drupal/issues/1008128
* https://stackoverflow.com/questions/27306539/at-what-level-do-postgres-index-names-need-to-be-unique
