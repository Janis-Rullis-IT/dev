# `test_paths`

## https://github.com/elixir-lang/elixir/blob/master/lib/mix/lib/mix/tasks/test.ex

```
:test_paths` - list of paths containing test files. Defaults to
      `["test"]` if the `test` directory exists; otherwise, it defaults to `[]`.
      It is expected that all test paths contain a `test_helper.exs` file
```

## Select a different test folder depending on the config

* https://github.com/gjaldon/ecto_enum/blob/master/mix.exs

```ex
test_paths: test_paths(Mix.env()),

defp test_paths(:mysql), do: ["test/mysql"]
defp test_paths(_), do: ["test/pg"]
```