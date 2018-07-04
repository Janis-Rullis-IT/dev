# Config

## Change DB configuration on runtime

* [Runtime configuration, migrations and deployment for Elixir applications: Init/2 callbacks (medium.com/nebo-15)](https://medium.com/nebo-15/runtime-configuration-migrations-and-deployment-for-elixir-applications-6295b892fa6a#1530)
* [Mastering Elixir Releases with Distillery — A (Pretty) Complete Guide (hackernoon.com)](https://hackernoon.com/mastering-elixir-releases-with-distillery-a-pretty-complete-guide-497546f298bc#93fe)
* [init/2 Ecto.Repo (hexdocs.pm/ecto/)](https://hexdocs.pm/ecto/Ecto.Repo.html#c:init/2)
* [Dynamic Repo configuration (github.com/elixir-ecto)](https://github.com/elixir-ecto/ecto/issues/1964)
* start_link

## Get config values

```ex
IO.inspect Application.get_env(:elixir_backend, ElixirBackend.Repo)
```