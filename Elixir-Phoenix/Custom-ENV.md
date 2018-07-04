# Custom ENV

By default there is :prod, :dev, :test, but you can add more.

## Print current ENV

```ex
Mix.env()
```
> :dev

## Switch ENV

```ex
MIX_ENV=prod mix multi_db
```

## Create a custom 'my_custom' ENV

* Copy 'config/dev.exs' and 'config/dev.secret.exs'.
* Call and define the env
```ex
MIX_ENV=my_custom mix multi_db
```
This will re-compile.

## Check that specific configs has been loaded

```ex
IO.inspect Application.get_env(:elixir_backend, ElixirBackend.Repo)
```
