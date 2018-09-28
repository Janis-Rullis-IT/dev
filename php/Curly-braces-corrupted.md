# Curly braces converted to percents when parsed

## Problem

```php
<?php
$doc = new DOMDocument();
$doc->loadHTML('<html><body>Test<br><a href="{{variable}}"></a></body></html>');
echo $doc->saveHTML();
```
> <html><body>Test<br><a href="%7B%7Bvariable%7D%7D"></a></body></html>

## Hack'/duct-tape solution

* [Avoid percent-encoding href attributes when using PHP's DOMDocument](https://stackoverflow.com/a/20104953)


```php
function fix_template_variable_tokens($template_string)
{
    $pattern = "/%7B%7B(\w+)%7D%7D/";
    $replacement = '{{$1}}';
    return preg_replace($pattern, $replacement, $template_string);
}

$html = $doc->saveHTML();
$html = fix_template_variable_tokens($html);
```