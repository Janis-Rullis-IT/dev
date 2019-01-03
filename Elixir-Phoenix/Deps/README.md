# [Elixir deps](https://hexdocs.pm/mix/Mix.Tasks.Deps.html)

https://til.hashrocket.com/posts/afk4ei0eo5-view-your-outdated-packages

## Git

```ex
{:gettext, git: "https://github.com/elixir-lang/gettext.git", tag: "0.1"}
```

## Local

```ex
{:local_dependency, path: "path/to/local_dependency"}
```

## Config location

mix.exs

```ex
# Type `mix help deps` for examples and options.
  defp deps do
    [
      {:phoenix, "~> 1.3.3"},
      {:phoenix_pubsub, "~> 1.0"},
      {:phoenix_ecto, "~> 3.2"},
      {:mariaex, "~> 0.8.2"} 
      {:phoenix_html, "~> 2.10"},
      {:phoenix_live_reload, "~> 1.0", only: :dev},
      {:gettext, "~> 0.11"},
      {:cowboy, "~> 1.0"}
    ]
  end
```

## Load

```shell
mix deps.get
```

```
Resolving Hex dependencies...
Dependency resolution completed:
Unchanged:
  connection 1.0.4
  cowboy 1.1.2
  cowlib 1.0.2
  db_connection 1.1.3
  decimal 1.5.0
  ecto 2.2.10
  file_system 0.2.5
  gettext 0.15.0
  mime 1.3.0
  phoenix 1.3.3
  phoenix_ecto 3.3.0
  phoenix_html 2.11.2
  phoenix_live_reload 1.1.5
  phoenix_pubsub 1.0.2
  plug 1.6.0
  poison 3.1.0
  poolboy 1.5.1
  ranch 1.3.2
New:
  mariaex 0.8.4
```
