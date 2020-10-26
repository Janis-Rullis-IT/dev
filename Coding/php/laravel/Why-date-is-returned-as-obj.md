# [Why is date returned as object?](https://stackoverflow.com/a/47977506)

Carbon lib by default converts it like that.

> By default created_at and updated_at are Carbon objects, so to get again in format Y-m-d H:i:s, you can do just:

```php
$object->created_at->toDateTimeString();
```