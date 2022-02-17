# All-libs-are-available.md

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
