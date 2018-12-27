# [How to pass Repo for a package to use? (elixirforum.com)](https://elixirforum.com/t/how-to-pass-repo-for-a-package-to-use/16321)

## config/config.exs

```ex
config :incremental_slug, repo: Backend.Repo
```

## PACKAGE/mix.exs

```ex
# Run "mix help deps" to learn about dependencies.
  defp deps do
    [
      {:ecto, ">= 2.2.0"}
    ]
  end
```

## PACKAGE/lib/incremental_slug.ex

```ex
defmodule IncrementalSlug do
    def repo() do
        Application.get_env(:incremental_slug, :repo)
    end
end
```

```ex
do: queryable |> order_by(desc: ^to) |> limit(1) |> repo().one()
```