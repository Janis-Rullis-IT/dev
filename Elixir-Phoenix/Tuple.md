# Tuple {} = ArrayList

* [Tuple (hexdocs.pm)](https://hexdocs.pm/elixir/Tuple.html)

Indexed list (not-associative). You can not have {1:'one'}.

```ex
{1,2}
```
> 0:1, 1:2

## If you want associative list

Then use Maps.

## [Difference with lists](https://elixir-lang.org/getting-started/basic-types.html#lists-or-tuples)

* [When to use LinkedList over ArrayList? (stackoverflow.com)](https://stackoverflow.com/questions/322715/when-to-use-linkedlist-over-arraylist)

* Array are faster for get set.
* Linkedlist are faster at inserting, deleting new elements.

If you want insert a new element after the 3d element then all elements after it will be rewritten.

### Size / Access

* Tuple - instantly.
* List - need to traverse whole list.

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
