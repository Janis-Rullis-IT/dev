# Common bug use-cases

## Sequence of methods with the same name

If guards have the same amount of parameters then the sequence may count.

```ex
getUniqSlug(true)
def getUniqSlug(taken), do: exit 'bbb'
def getUniqSlug(taken) when taken === true, do: exit 'aaa'
```
> bbb