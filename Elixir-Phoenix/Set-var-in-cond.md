# Set variable in a condition

* [Elixir: Set variable in if statement (stackoverflow.com)](https://stackoverflow.com/a/39550669)

## `cond`

```ex
slow_timeout = System.get_env("slow_timeout")
timeout = if is_nil(slow_timeout) === false do
  String.to_integer(slow_timeout)
else
  120_000
end
```

## `if`

```ex
a = 0
a = if true do
      1 + 1
    else
      a + 1
    end
```