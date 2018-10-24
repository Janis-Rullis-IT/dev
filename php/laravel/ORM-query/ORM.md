# ORM

## Update

### [One](https://stackoverflow.com/a/37254456)

```php
Model::where(['x' => 1, 'y' => 2])->first()->update([...]);
```

## Collect key based

```php
return Posts::all()->keyBy('id');
```