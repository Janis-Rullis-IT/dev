# [Format](https://hexdocs.pm/mix/master/Mix.Tasks.Format.html)

```shell
mix format mix.exs "lib/**/*.{ex,exs}"
```

Or `mix format` if you have

### .formatter.exs

```exs
[
  inputs: [
        "mix.exs",  "{config, lib, test, priv}/**/*.{ex,exs}", "lib/backend/**/*.{ex,exs}",
	]
]
```