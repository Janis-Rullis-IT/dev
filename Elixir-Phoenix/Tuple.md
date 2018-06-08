# Tuple

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