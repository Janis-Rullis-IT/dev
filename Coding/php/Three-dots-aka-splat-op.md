# [Three-dots-aka-splat-op.md](https://stackoverflow.com/a/41124083)

```php
function concatenate($transform, ...$strings) {
    $string = '';
    foreach($strings as $piece) {
        $string .= $piece;
    }
    return($transform($string));
}

echo concatenate("strtoupper", "I'd ", "like ", 4 + 2, " apples");
// This would print:
// I'D LIKE 6 APPLES
```
