# Config

* [Runtime configuration, migrations and deployment for Elixir applications: Init/2 callbacks (medium.com/nebo-15)](https://medium.com/nebo-15/runtime-configuration-migrations-and-deployment-for-elixir-applications-6295b892fa6a#1530)
* [Mastering Elixir Releases with Distillery — A (Pretty) Complete Guide (hackernoon.com)](https://hackernoon.com/mastering-elixir-releases-with-distillery-a-pretty-complete-guide-497546f298bc#93fe)
* [init/2 Ecto.Repo (hexdocs.pm/ecto/)](https://hexdocs.pm/ecto/Ecto.Repo.html#c:init/2)
* [Dynamic Repo configuration (github.com/elixir-ecto)](https://github.com/elixir-ecto/ecto/issues/1964)

## Global variables (System)

Must be string, otherwise throws an error.

### Set

```ex
System.put_env("slow_timeout", "1000000000")
```

### Get

```ex
slow_timeout = System.get_env("slow_timeout")
if is_nil(slow_timeout) === false do
    slow_timeout_int = String.to_integer(slow_timeout)
end
```

## Get config values (Application)

```ex
IO.inspect Application.get_env(:elixir_backend, ElixirBackend.Repo)
```

## Get env

```ex
Mix.env()
```
> :dev

## Get other Mix values

See [Custom-ENV-MIX](Custom-ENV-MIX.md)


## Change DB configuration on runtime

### Pass these new config values through Systen globals

#### put_env
```ex
System.put_env("db_name", "elixir_2")
System.put_env("slow_timeout", "1000000000")
```

#### or if this is goes through mix command

```ex
db_name=elixir_2 mix user -n "Janis Rullis"
```

### Catch and set them in Your repo

In this example, init() (which is responsible for parsing config):
* Overwrites :timeout and :pool_timeout with System.get_env("slow_timeout").
* Overwrites :database with System.get_env("db_name").

```ex
defmodule ElixirBackend.Repo do
  use Ecto.Repo, otp_app: :elixir_backend

  def init(_type, config) do

    # Enable a slow timeout
    slow_timeout = System.get_env("slow_timeout")
    if is_nil(slow_timeout) === false do
      slow_timeout_int = String.to_integer(slow_timeout)
      config = config
      |> Keyword.put(:timeout, slow_timeout_int)
      |> Keyword.put(:pool_timeout, slow_timeout_int)
    end

    # Switch DB.
    db_name = System.get_env("db_name")
    if is_nil(db_name) === false do
      config = config |> Keyword.put(:database, db_name)
    end

    {:ok, config}
  end
end
```

## How long lasts these dynamic settings? Will it affect other call that does no need this flag?

It lasts per call.

For example,

```shell
slow_timeout=1000000 mix db.slow_timeout
````

Will run with the slow timeout, but the next call right after, will run as usual.

```shell
mix db.slow_timeout
````