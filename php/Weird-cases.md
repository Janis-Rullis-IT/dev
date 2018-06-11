# Weird cases

## \DB::statement returns false

* $values keys must be indexes and not strings.

```php
\DB::statement('...VALUES(?,?)', $values);
```

### Won't work

```php
$value['user_id'] = 1;
$value['post_id'] = 2;
```

### Will work

```php
$value[] = 1;
$value[] = 2;
```