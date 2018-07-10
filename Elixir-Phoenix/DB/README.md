# DB

## `mix ecto.create`

Creates a database. Suggested after a new project is created. Builds depending on DB config.

> The database for ElixirBackend.Repo has been created.

### If DB already exists

> The database for ElixirBackend.Repo has already been created.

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