# How to find a vague bug

With a vague is meant a bug, which location can't be found, because there are no obvious identifications, like clear errors or a specific section in the website where it appears.

## Steps

* Revert to the last commit of the last successful release. You can use [`git checkout COMMIT_HASH`](https://github.com/janis-rullis/dev/blob/master/git/Git-commit-history.md#revert-to-a-specific-commit) for this. This will make sure, that this bug really is related with the last changes.
* Move up to next commits one-by-one till the bug appears.

## JS

* Use breakpoints instead of console.log, this will give you more info and will be faster.

## Logs

To find the specific where it breaks, write logs with a number and date.

```php
file_put_contents(storage_path('where.log'), date('H:i:s')  . " " . "2 \n", FILE_APPEND);
```

