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
