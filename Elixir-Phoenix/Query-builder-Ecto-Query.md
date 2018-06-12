# Elixir query builder [Ecto.Query](https://hexdocs.pm/ecto/Ecto.Query.html)

## Requirements

```ex
import Ecto.Query
```

## A simple select

```ex
my_query = from u in "users", where: u.age > 18, select: u.name
Repo.all(query)
````

## JOIN

```ex
my_query = from p in "users", join: c in "comments", where: c.post_id == p.id
```

## Test in `iex`

* [Fix `iex module Ecto.Query is not loaded and could not be found`](https://stackoverflow.com/a/46128659)

> Query does not be related with the actual system to build it. It will fail only when executed.

```shell
iex -S mix
```

## List query keys

```ex
Map.keys(my_query)
```

> [:__struct__, :assocs, :distinct, :from, :group_bys, :havings, :joins, :limit,
> :lock, :offset, :order_bys, :prefix, :preloads, :select, :sources, :updates,
> :wheres]


## Check if has an optional JOIN

```ex
my_query.joins
```

### Has JOIN

```ex
[
  %Ecto.Query.JoinExpr{
    assoc: nil,
    file: "iex",
    ix: nil,
    line: 2,
    on: %Ecto.Query.QueryExpr{expr: true, file: "iex", line: 2, params: []},
    params: [],
    qual: :inner,
    source: {"comments", nil}
  }
]
```

### Has not

```ex
[]
```

### GROUP BY only if has JOIN

```ex
my_query_2 = if List.first(my_query.joins) === nil do
#    "Don't have JOINS"
    my_query
else
#    "Have JOINS"
    from(a in my_query, group_by: a.id)
end
```