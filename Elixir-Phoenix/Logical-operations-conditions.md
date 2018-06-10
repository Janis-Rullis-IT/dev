# Conditions - case, if, cond

* [case, cond, and if (elixir-lang.org).](https://elixir-lang.org/getting-started/case-cond-and-if.html)
* [Control Structures (elixirschool.com).](https://elixirschool.com/en/lessons/basics/control-structures/)

## [Case](https://elixir-lang.org/getting-started/case-cond-and-if.html#case)

Compare a value against many patterns.

### Example #1

```shell
iex> case {1, 2, 3} do
...>   {4, 5, 6} ->
...>     "This clause won't match"
...>   {1, x, 3} ->
...>     "This clause will match and bind x to 2 in this clause"
...>   _ ->
...>     "This clause would match any value"
...> end
```
> "This clause will match and bind x to 2 in this clause"

### Example #2

```shell
iex> case {:ok, "Hello World"} do
...>   {:ok, result} -> result
...>   {:error} -> "Uh oh!"
...>   _ -> "Catch all"
...> end
```
> "Hello World"

> If ok is true, then return the 2nd param `result` which is 'Hello World'.

## Logical operators

* and, &&
* or, ||