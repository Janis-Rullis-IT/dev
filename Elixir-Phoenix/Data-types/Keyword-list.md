# Keyword list

* [Keyword (hexdocs.pm/elixir)](https://hexdocs.pm/elixir/Keyword.html)

```ex
[a: 1, b: 2, a: 3]
```

## Get element

* [Get a value from a keyword list (elixir-examples.github.io)](https://elixir-examples.github.io/examples/get-a-value-from-a-keyword-list)

```
# [] can be used, first match returned
1 = [a: 1, b: 2, a: 3][:a]

# [] missing value is nil
nil = [a: 1, b: 2, a: 3][:c]

# Keyword get also works
1 = Keyword.get([a: 1, b: 2, a: 3], :a)

# missing value is nil
nil = Keyword.get([a: 1, b: 2, a: 3], :c)

# an optional default value can be specified
# for missing keys
"missing" = Keyword.get([a: 1, b: 2, a: 3], :c, "missing")

# Keyword.take returns a list of matching pairs
[a: 1, a: 3] = Keyword.take([a: 1, b: 2, a: 3], [:a])

[] = Keyword.take([a: 1, b: 2, a: 3], [:c])

# dot syntax does NOT work
# results in compile error
[a: 1, b: 2, a: 3].a
```

## Update

### put

```ex
Keyword.put([a: 1, b: 2], :a, 3)
```
> [a: 3, b: 2]

### update

```ex
Keyword.update!([a: 77], :a, &(&1 + 2))
```
> [a: 79]

### get_and_update

```ex
iex> Keyword.get_and_update([a: 1], :a, fn current_value ->
...>   {current_value, "new value!"}
...> end)
{1, [a: "new value!"]}
```