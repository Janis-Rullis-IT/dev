# Fix `adapter Ecto.Adapters.Postgres was not compiled, ensure it is correct and it is included as a project dependency`


* https://github.com/elixir-ecto/ecto/tree/v3.0.0#usage
* https://github.com/elixir-ecto/ecto/issues/2558

```ex
{:ecto_sql, "~> 3.0"},
{:postgrex, ">= 0.0.0"},
```

```shell
mix deps.clean --all
mix deps.get
mix
```