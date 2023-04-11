# Mass-bulk-insert.md

https://stackoverflow.com/a/13595393

```php
$data = array(
    array('name'=>'Coder 1', 'rep'=>'4096'),
    array('name'=>'Coder 2', 'rep'=>'2048'),
    //...
);

Coder::insert($data);
``` 
