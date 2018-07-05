# DB

## Fix * (DBConnection.ConnectionError)timed out because it checked out the connection for longer than 30000ms

### Reproduce with [`mix slow_query`](https://github.com/janis-rullis/elixir/blob/master/backend/lib/mix/tasks/slow-query.ex)

### Change timeout

Increase `timeout:` in config/*.exs

## [Scheme types](https://hexdocs.pm/ecto/Ecto.Schema.html#module-primitive-types)

## Fix UTF-8 chars stored as '?'

Add to DB config `binary_as: :field_type_blob`.

```ex
config :edurio, ElixirBackend.Repo,
    ...
    pool_timeout: 40_000,
    binary_as: :field_type_blob
```

## RCTO CHEATSHEET 
* https://devhints.io/phoenix-ecto
