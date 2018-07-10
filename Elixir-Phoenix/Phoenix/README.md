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

# Create a new API project

* [Containerize & deploy Elixir and Phoenix apps in production](https://blog.cloud66.com/deploying-your-phoenix-applications-in-production-using-docker/)
* [phx.new.ex (github.com/phoenixframework/phoenix)](https://github.com/phoenixframework/phoenix/blob/master/installer/lib/mix/tasks/phx.new.ex)
* [Mix Tasks (hexdocs.pm/phoenix)](https://hexdocs.pm/phoenix/phoenix_mix_tasks.html)
* ` mix help phx.new`

```shell
mix phx.new elixir_backend --no-brunch --no-html --no-brunch --database mysql / postgres / mssql
```

```
* creating elixir_backend/config/config.exs
* creating elixir_backend/config/dev.exs
* creating elixir_backend/config/prod.exs
* creating elixir_backend/config/prod.secret.exs
* creating elixir_backend/config/test.exs
* creating elixir_backend/lib/elixir_backend/application.ex
* creating elixir_backend/lib/elixir_backend.ex
* creating elixir_backend/lib/elixir_backend_web/channels/user_socket.ex
* creating elixir_backend/lib/elixir_backend_web/views/error_helpers.ex
* creating elixir_backend/lib/elixir_backend_web/views/error_view.ex
* creating elixir_backend/lib/elixir_backend_web/endpoint.ex
* creating elixir_backend/lib/elixir_backend_web/router.ex
* creating elixir_backend/lib/elixir_backend_web.ex
* creating elixir_backend/mix.exs
* creating elixir_backend/README.md
* creating elixir_backend/test/support/channel_case.ex
* creating elixir_backend/test/support/conn_case.ex
* creating elixir_backend/test/test_helper.exs
* creating elixir_backend/test/elixir_backend_web/views/error_view_test.exs
* creating elixir_backend/lib/elixir_backend_web/gettext.ex
* creating elixir_backend/priv/gettext/en/LC_MESSAGES/errors.po
* creating elixir_backend/priv/gettext/errors.pot
* creating elixir_backend/lib/elixir_backend/repo.ex
* creating elixir_backend/priv/repo/seeds.exs
* creating elixir_backend/test/support/data_case.ex
* creating elixir_backend/.gitignore

Fetch and install dependencies? [Yn] y
* running mix deps.get
* running mix deps.compile

We are all set! Go into your application by running:

    $ cd elixir_backend

Then configure your database in config/dev.exs and run:

    $ mix ecto.create

Start your Phoenix app with:

    $ mix phx.server

You can also run your app inside IEx (Interactive Elixir) as:

    $ iex -S mix phx.server
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