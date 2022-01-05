# PHPUnit

## [How to run single test method with phpunit?](https://stackoverflow.com/a/26095567)

```shell
phpunit --filter testAPI tests/MyApiTest.php
```

## [Fix does not execute after exception](https://stackoverflow.com/a/39016623)

```php
$expected = 'Apple not found';
$exceptionMessage = null;
try {
    Apple::findOrFail(0);
} catch (\Throwable $e) {
    $exceptionMessage = $e->getMessage();
}
$this->assertEquals($expected, $exceptionMessage);

dd('LOL');
```
