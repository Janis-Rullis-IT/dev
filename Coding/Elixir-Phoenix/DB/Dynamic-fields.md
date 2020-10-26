# Dynamic fields in where or select

* [Dynamic fields in Ecto queries (elixirforum.com)](https://elixirforum.com/t/dynamic-fields-in-ecto-queries/1593/2)
* [`field(source, field)` (hexdocs.pm/ecto)](https://hexdocs.pm/ecto/Ecto.Query.API.html#field/2)

``ex
toField = :uri
```

## Where

```ex
Post |> where([a], field(a, ^toField) == ^uri)
```

## Select

```ex
Post |> select([a], field(a, ^toField))
 ```