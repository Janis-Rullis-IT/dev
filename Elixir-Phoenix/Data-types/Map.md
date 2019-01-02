# Maps %{}

## [Set a key from a variable](https://hexdocs.pm/elixir/Map.html)

```ex
id = 123
%{id => 456}
```
> `%{123 =>456}`

## Get

```ex
%{a: 1, b: 2} |> Map.get(:b)
```
> 2

### When a key is a string

```ex
map = %{"1": 1, "2": 1}
map |> Map.get(:"2")
```
> 1

```ex
map |> Map.get(:"3")
```
> nil

```ex
string = "3"
%{"1": 1, "2": 1, "3": 1, "4": 1, "5": 1, "6": 1, "7": 1, "8": 1, "9": 1} |> Map.get(string |> String.to_atom)
```
> 1

## [Insert](https://hexdocs.pm/elixir/Map.html#put/3)

```ex
data |> Map.put(:apple, data)
```

## List all keys

```ex
Map.keys(my_query)
```
> [:__struct__, :assocs, :distinct, :from, :group_bys, :havings, :joins, :limit,
> :lock, :offset, :order_bys, :prefix, :preloads, :select, :sources, :updates,
> :wheres]

## Check if has a key

```ex
Map.has_key?(my_query, :from)
```
> true

## Access an element

```ex
my_query.from
```

## [Traverse](https://hexdocs.pm/elixir/Enum.html)

```ex
map = %{a: 1, b: 2}
Enum.map(map, fn {k, v} -> {k, v * 2} end)
[a: 2, b: 4]
```

## Handle every element

* [Enum.reduce (robdor.com)](https://robdor.com/2015/01/22/elixir-enum-reduce/)

```ex
Enum.reduce [1, 2, 3], 100, fn(num, acc) ->
  num + acc
end
````
> 1 + 100

> 2 + 101

> 3 + 103

> = 106

## [Group by](https://stackoverflow.com/a/40145358)

```ex
post_by_category = posts |> Enum.group_by(&(&1.category_id))
```

## Enum.each vs Enum.map

```ex
parsed = Enum.each(posts, fn post ->    
    post
end
```
> Will return :ok


```ex
parsed = Enum.map(posts, fn post ->
    post
end
```
> Will return [%{...},%{...}] 
Map returns a list that is the result

of applying that function to each element of the collection.
