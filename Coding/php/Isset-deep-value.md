# isset-deep-value.md
* https://www.php.net/manual/en/function.isset.php

## It's OK to check deep values with isset

```php
isset($a['b']['d'])
```

## Example

```
>>> $a = ['b'=>1];
=> [
     "b" => 1,
   ]
>>> isset($a)
=> true
>>> isset($a['c'])
=> false
>>> isset($a['b'])
=> true
>>> isset($a['b']['d'])
=> false
>>> $a['b'] = ['d'=>1];

>>> isset($a['b']['d'])
=> true
```
