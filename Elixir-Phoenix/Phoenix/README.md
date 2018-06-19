# Phoenix

## [Check version](http://shorts.jeffkreeftmeijer.com/2015/find-the-currently-installed-phoenix-version-number/)

```shell
mix phoenix.new -v
```
> Phoenix v1.3.2

## [Install latest Phoenix](https://hexdocs.pm/phoenix/installation.html#phoenix)

```shell
mix archive.install https://github.com/phoenixframework/archives/raw/master/phx_new.ez
```
> Phoenix v1.3.3

# Create a new project

* [Containerize & deploy Elixir and Phoenix apps in production](https://blog.cloud66.com/deploying-your-phoenix-applications-in-production-using-docker/)

```shell
mix phoenix.new elixir_backend
```
```
We are all set! Run your Phoenix application:

    $ cd elixir_backend
    $ mix phoenix.server

You can also run your app inside IEx (Interactive Elixir) as:

    $ iex -S mix phoenix.server

Before moving on, configure your database in config/dev.exs and run:

    $ mix ecto.create
```

## After the setup

### Additional .gitignore rules

```
/config/*.secret.exs
.history/
.elixir_ls
storage
```

### Setup dev.secret.exs

At the bottom of 'dev.exs' include 'dev.secret.exs'

```ex
import_config "dev.secret.exs"
```

In dev.secret.exs, override sensitive values. Like

```exs
config :elixir_backend, ElixirBackend.Endpoint,
  secret_key_base: "my_secret_key_base"

# Configure your database
config :elixir_backend, ElixirBackend.Repo,
  adapter: Ecto.Adapters.Postgres,
  username: "postgres",
  password: "postgres",
  database: "my_secret_db",
  pool_size: 15
```