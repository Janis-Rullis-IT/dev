# [Install Phoenix](https://www.learnphoenix.tv/episodes/installing-phoenix)

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

