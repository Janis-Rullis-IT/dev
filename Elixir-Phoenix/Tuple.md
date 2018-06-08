# Tuple

* [Tuple (hexdocs.pm)](https://hexdocs.pm/elixir/Tuple.html)

Indexed list (not-associative). You can not have {1:'one'}.

```ex
{1,2}
```
> 0:1, 1:2

## If you want associative list

Then use Maps.

## [Difference with lists](https://elixir-lang.org/getting-started/basic-types.html#lists-or-tuples)

*  This means accessing the length of a list is a linear operation: we need to traverse the whole list in order to figure out its size.
* Tuples, on the other hand, are stored contiguously in memory. This means getting the tuple size or accessing an element by index is fast. However, updating or adding elements to tuples is expensive because it requires creating a new tuple in memory:

## Insert a new element

```ex
tuple = {:ok, "Hello"}
tuple = Tuple.append(tuple, :world)
tuple |> IO.inspect()
```
> {:ok, "Hello", :world}

## Compare

```ex
tuple = {:ok, "Hello"}
tuple2 = Tuple.append(tuple, :world)

assert tuple == tuple
assert tuple != tuple2
```

## Count

```ex
tuple_size(tuple)
```

## Access an item

```ex
tuple = {:ok, "Hello"}
IO.inspect elem(tuple, 0); # :ok
IO.inspect elem(tuple, 1); # "Hello"
```