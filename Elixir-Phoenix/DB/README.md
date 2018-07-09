# DB

## [Scheme types](https://hexdocs.pm/ecto/Ecto.Schema.html#module-primitive-types)

* `:id` - integer	`1, 2, 3`
* `:binary_id` - binary	`<<int, int, int, ...>>`
* `:integer` - integer	`1, 2, 3`
* `:float` - float	`1.0, 2.0, 3.0`
* `:boolean` - boolean	`true, false`
* `:string` -	UTF-8 encoded string	`“hello”`
* `:binary` - binary	`<<int, int, int, ...>>`
* `{:array, inner_type}` - list  `[value, value, value, ...]`
* `:map` - map
* `{:map, inner_type}` - map	
* `:decima`l - Decimal	

## Fix UTF-8 chars stored as '?'

Add to DB config `binary_as: :field_type_blob`.

```ex
config :edurio, ElixirBackend.Repo,
    ...
    pool_timeout: 40_000,
    binary_as: :field_type_blob
```

## ECTO CHEATSHEET 

* [Phoenix ecto (devhints.io)](https://devhints.io/phoenix-ecto)

## Fix * (DBConnection.ConnectionError)timed out because it checked out the connection for longer than 30000ms

### Reproduce with [`mix slow_query`](https://github.com/janis-rullis/elixir/blob/master/backend/lib/mix/tasks/slow-query.ex)

### Change timeout

Increase `timeout:` in config/*.exs