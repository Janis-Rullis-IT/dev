# Data types

## Atoms

Works as const string keys in JS.

```ex
:atom
{:ok, :error}
```

## INT formatting

1_000_000 same as 1000000

## Range

0..100

## Functions

1st class value - can be stored in variables and rewritten.

```ex
add = fn(a, b) ->
  a + b
end

add.(1, 2)
```
