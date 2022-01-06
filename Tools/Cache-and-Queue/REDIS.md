# REDIS

```shell
docker exec -it redis sh
redis-cli flushall
```

# Lara

```shell
php artisan queue:listen -h # Listen to a given queue
php artisan queue:work -h # Start processing jobs on the queue as a daemon
php artisan queue:failed -h #  List all of the failed queue jobs
```

## Select redis DBs

By default it connects to the DB 0. So if You can not find keys then try to switch the db.

```env
REDIS_CACHE_DB=2
REDIS_SESSION_DB=3
```

```shell
redis-cli
select 2
KEYS *
```

# It's also smart to add some kind of timeout:

```shell
php artisan queue:listen --tries=3 --timeout=60
```

```
[2021-09-27 12:29:17][CJGTuSBBuyGMrMoJfhIIAiQsC5yDM9C6] Processing: Jobs\PickApples
[2021-09-27 12:29:19][CJGTuSBBuyGMrMoJfhIIAiQsC5yDM9C6] Processed:  Jobs\PickApples
```

## [Fix `Cannot use 'EVAL' with redis-cluster`](https://stackoverflow.com/a/60036453)
> When `QUEUE_DRIVER=sync` changed to `QUEUE_DRIVER=redis`.

Wrap the queue name in `{}`.

```php
->onQueue('{default}');
```
