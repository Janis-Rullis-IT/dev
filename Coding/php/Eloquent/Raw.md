# Raw

## Bind

### Multiple IDs

```php
$sqlParams = [":user_id" => $userId];
$inIDs = implode(",", $ids); // binding was not used because it would result in IN('1,2,3,4').

$sql = "
    SELECT * FROM comments            
    AND `user_id` = :user_id
    AND `id` IN($ids)";

return \DB::select($sql, $sqlParams);
```
