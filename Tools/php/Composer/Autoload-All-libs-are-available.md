# Autload

* https://alanstorm.com/composer_autoloader_part_1/

## All-libs-are-available

Example - a sub-lib that is used by a lib we choosed to included `phpunit`.

```php
use \TheSeer\Tokenizer\Tokenizer;
$a = new Tokenizer;
```
```
^ TheSeer\Tokenizer\Tokenizer^ {#5094
  -map: array:28 [
    "(" => "T_OPEN_BRACKET"
    ")" => "T_CLOSE_BRACKET"
```


## Is-it-necessary-to-include-even-its-in-sublib

Id say yes, because it will just add a reference to the existing one if versions match and will not download a new copy. And it will make sure that nothing breaks if the other lib is removed that contains it as a sublib.
