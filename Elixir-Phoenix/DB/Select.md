# Select

* [Elixir query builder Ecto.Query](https://hexdocs.pm/ecto/Ecto.Query.html)
* [Getting Started (hexdocs.pm/ecto)](https://hexdocs.pm/ecto/getting-started.html)
* [Getting Started (github.com/elixir-ecto)](https://github.com/elixir-ecto/ecto/blob/master/guides/Getting%20Started.md)


## Return a raw query as a key-val

### Before

```ex
result.rows
```

```json
{
    "data": [
        [
            1,
            "2019"
        ]
    ]
}
```

### After

```sql
result = Ecto.Adapters.SQL.query!(Backend.Repo, query)
Enum.map result.rows, fn(row) ->
  Enum.zip(result.columns, row) |> Map.new
end
```

```json
{
    "data": [
        {
            "name": "2019",
            "id": 1
        }
    ]
}
```

## Requirements

```ex
import Ecto.Query
```

## Example

```ex
query = __MODULE__
|> select([a, b], [a.id, a.uri, b.surname, count(a.id)])
|> join(:inner, [a], b in User, a.id == b.user_id)
|> where([a], not(is_nil(a.deleted_at)))
|> where([a], a.uri == ^uri)
|> where([a], a.id != 1)
|> where([a], like(a.uri, ^"#{generatedUri}-_"))
|> where([b], not(is_nil(b.deleted_at)))
|> group_by([a], a.id)
|> order_by([desc: :id])
|> limit(2)

Ecto.Adapters.SQL.to_sql(:all, Repo, query) |> IO.inspect
```

```
{"SELECT p0.`id`, p0.`uri`, u1.`surname`, count(p0.`id`) FROM `posts` AS p0 INNER JOIN `users` AS u1 ON p0.`id` = u1.`user_id` WHERE (NOT (p0.`deleted_at` IS NULL)) AND (p0.`uri` = ?) AND (p0.`id` != 1) AND (NOT (p0.`deleted_at` IS NULL)) GROUP BY p0.`id` ORDER BY p0.`id` DESC LIMIT 2",
 ["some-title"]}
```

## [Count](https://til.hashrocket.com/posts/e0754031e3-counting-records-with-ecto)

```ex
__MODULE__ |> select(count("*")) |> Repo.one
```
> 3

```ex
__MODULE__ |> select([a], [a.id, count(a.id)]) |> Repo.one
```
> [1,3]

## [Build/Compose](https://www.sitepoint.com/elixirs-ecto-querying-dsl-beyond-the-basics/)

### [Using macro syntax](https://hexdocs.pm/ecto/2.1.0-rc.1/Ecto.Query.html#module-macro-api) (I prefer this one)

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

#### Split in parts

* Advantage - split by responsibilities, readable, easy to update.
* Major disadvantage - can't set `where` operations (at least I could not find how).

```ex
where = [uri: :uri]
select1 = [:id]
select = select1 ++ [:name]
order_by = [desc: :id]
query = from __MODULE__, where: ^where, order_by: ^order_by, select: ^select
```
> `#Ecto.Query<from p in Backend.Blog.Post, where: p.uri == ^:uri, order_by: [desc: p.id], select: [:id, :name]>`

## [Get the generated SQL](https://hexdocs.pm/ecto/2.2.9/Ecto.Adapters.SQL.html#to_sql/3)

```ex
query = __MODULE__
|> select([a], [a.id])
|> where([a], a.uri == ^uri)
|> where([a], a.id != 1)

Ecto.Adapters.SQL.to_sql(:all, Repo, query) |> IO.inspect
```

```
{"SELECT p0.`id` FROM `posts` AS p0 WHERE (p0.`uri` = ?) AND (p0.`id` != 1)",
 ["some-title"]}
```

## A simple select

```ex
my_query = from u in "users", where: u.age > 18, select: u.name
Repo.all(query)
```

## [Like](https://hexdocs.pm/ecto/Ecto.Query.API.html#like/2)

```ex
|> where([a], like(a.uri, ^"#{generatedUri}-_"))
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