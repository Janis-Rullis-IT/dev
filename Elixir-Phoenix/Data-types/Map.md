# Maps %{}

## List all keys

```ex
Map.keys(my_query)
```
> [:__struct__, :assocs, :distinct, :from, :group_bys, :havings, :joins, :limit,
> :lock, :offset, :order_bys, :prefix, :preloads, :select, :sources, :updates,
> :wheres]

## Check if has a key

```ex
Map.has_key?(my_query, :from)
```
> true


## Access an element

```ex
my_query.from
```