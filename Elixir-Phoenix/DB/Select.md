# Select

* [Elixir query builder Ecto.Query](https://hexdocs.pm/ecto/Ecto.Query.html)
* [Getting Started (hexdocs.pm/ecto)](https://hexdocs.pm/ecto/getting-started.html)
* [Getting Started (github.com/elixir-ecto)](https://github.com/elixir-ecto/ecto/blob/master/guides/Getting%20Started.md)

## Requirements

```ex
import Ecto.Query
```

## [Build/Compose](https://www.sitepoint.com/elixirs-ecto-querying-dsl-beyond-the-basics/)

### [Using keywords query syntax](https://blog.drewolson.org/composable-queries-ecto#query-composition)

#### Advantage

* No need to remind the scope in every section like for the macro syntax.

#### Disadvantage

* Ugly syntax of composing.
* Need to use commas.
* No pipe-operator support.

```ex
query = from a in __MODULE__, select: a.id
```
> `#Ecto.Query<from p in Backend.Blog.Post, select: p.id>`

```ex
query2 = from a in query, where: a.uri == ^uri
```
> `#Ecto.Query<from p in Backend.Blog.Post, where: p.uri == ^"some-title", select: p.id>`

#### Split in parts (I prefer this one)

* Advantage - split by responsibilities, readable, easy to update.

```ex
where = [uri: :uri]
select1 = [:id]
select = select1 ++ [:name]
order_by = [desc: :id]
query = from __MODULE__, where: ^where, order_by: ^order_by, select: ^select
```
> #Ecto.Query<from p in Backend.Blog.Post, where: p.uri == ^:uri, order_by: [desc: p.id], select: [:id, :name]>

### [Using macro syntax](https://hexdocs.pm/ecto/2.1.0-rc.1/Ecto.Query.html#module-macro-api)

* Advantage: Can use the pipe operator.
* Disadvantage: Duplicate code - in every method you need to specify the scope `([a],`.
```ex
query = __MODULE__ |> select([a],[a.id])
```
> `#Ecto.Query<from p in Backend.Blog.Post, select: [p.id]>`

```ex
query = query |> where([a], a.uri == ^uri)
```
> `#Ecto.Query<from p in Backend.Blog.Post, where: p.uri == ^"some-title", select: [p.id]>`

## A simple select

```ex
my_query = from u in "users", where: u.age > 18, select: u.name
Repo.all(query)
```

## JOIN

```ex
my_query = from p in "users", join: c in "comments", where: c.post_id == p.id
```

```ex
query = from(a in __MODULE__, join: b in User, on: a.user_id == b.id, limit: 1, select: %{id: a.id, title: a.title, name: b.name, surname: b.surname})
post = ElixirBackend.Repo.one(query)
post.surname
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

## [ORDER BY](https://hexdocs.pm/ecto/Ecto.Query.html)

```ex
order_by: [asc: a.question_id]
```

## [Count](https://stackoverflow.com/a/36685025)

```ex
length(Repo.all(query)) |> IO.inspect
```
> 3

## One

```ex
  def get_first() do
    query = from(a in __MODULE__, join: b in User, on: a.user_id == b.id, limit: 1, select: {a.id, a.title, b.name, b.surname})
    ElixirBackend.Repo.one(query)
  end
```

## Select as

```ex
query = from(a in __MODULE__, join: b in User, on: a.user_id == b.id, limit: 1, select: %{id: a.id, title: a.title, name: b.name, surname: b.surname})
post = ElixirBackend.Repo.one(query)
post.surname
```

## Raw query

```ex
query = "SELECT sleep(60)"
IO.inspect  Ecto.Adapters.SQL.query!(ElixirBackend.Repo, query, [])
```