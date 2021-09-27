# REDIS

```shell
docker exec -it redis sh
redis-cli flushall
```

## [Fix `Cannot use 'EVAL' with redis-cluster`](https://stackoverflow.com/a/60036453)
> When `QUEUE_DRIVER=sync` changed to `QUEUE_DRIVER=redis`.

Wrap the queue name in `{}`.

```php
->onQueue('{default}');
```
