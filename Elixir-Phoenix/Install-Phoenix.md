# Install latest Phoenix

* [Installing Phoenix](https://www.learnphoenix.tv/episodes/installing-phoenix)
* [Containerize & deploy Elixir and Phoenix apps in production](https://blog.cloud66.com/deploying-your-phoenix-applications-in-production-using-docker/)

> Elixir already has mix phoenix.new but these steps sets-up the latest Phoenix version.


```shell
git clone https://github.com/phoenixframework/phoenix.git
cd phoenix/installer && yes | mix local.phoenix
cd .. && yes | mix phoenix.new elixir_backend
```

> We are all set! Run your Phoenix application:

>    $ cd elixir_backend

>    $ mix phoenix.server

> You can also run your app inside IEx (Interactive Elixir) as:

>    $ iex -S mix phoenix.server

> Before moving on, configure your database in config/dev.exs and run:

>    $ mix ecto.create


## OR

```shell
mix archive.install https://github.com/phoenixframework/archives/raw/master/phx_new.ez
```

## Side-note

```shell
mix phoenix.new elixir_backend
```

Will generate a new fully functional project, which does not depend on the downloaded phoenix, so You can freely delete that 
'phoenix' directory.