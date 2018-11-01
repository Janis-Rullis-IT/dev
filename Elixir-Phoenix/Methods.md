# Methods

## One-liners

```ex
def createUniqueUriFromTitle(changeset), do: get_change(changeset, :title) |> createUniqueUriFromString(changeset)
```

## Multi-line

```ex
def createUniqueUriFromTitle(changeset) do
 get_change(changeset, :title) |> createUniqueUriFromString(changeset)
end
````

## Set default value \\ :default

* [Default function parameters (elixir-recipes.github.io)](http://elixir-recipes.github.io/functions/default-function-parameters/)

```ex
defmodule Bob do
  def say(message \\ "Hi, I'm Bob!") do
    "Bob says: #{message}"
  end	
end
```


## [Return value](https://stackoverflow.com/a/37446794)

The last statement executed is the return value.

## Anonymous

```ex
fn param1 ->
    param1 |> IO.inspect
end
```