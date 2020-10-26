# Try, catch

## [Ignore the error](https://stackoverflow.com/questions/2132759/php-catch-exception-and-continue-execution-is-it-possible)

```php
try
{
  SomeOperation();
}
catch (SomeException $e)
{
  // do nothing... php will ignore and continue    
}
```