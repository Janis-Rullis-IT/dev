# Lists [] = Linked list

* [List (hexdocs.pm/elixir)](https://hexdocs.pm/elixir/List.html)
* learnelixir.tv/episodes/02-data-types
* See also [Tuples](Tuple.md)

## List vs keyword list

### List

```ex
[1, 2, 3]
```

### [Keyword list](Keyword-list.md)

```ex
[a: 1, b: 2, a: 3]
```

## Get

### pop_at (takes out)

```ex
List.pop_at([1, 2, 3], 0)
```
> {1, [2, 3]}

### First

```ex
List.first([1, 2, 3])
```
> 1

### Last

```ex
List.last([1, 2, 3])
```
> 3

## Transform

### flatten

```ex
List.flatten([1, [[2], 3]])
````
> [1, 2, 3]

### to_tuple(list)

```ex
List.to_tuple([:share, [:elixir, 163]])
```
> {:share, [:elixir, 163]}

### char list

#### to_atom

```ex
List.to_atom('elixir')
```
> :elixir

#### to_int

```ex
List.to_integer('123')
```
> 123

#### to_float

```ex
List.to_float('2.2017764e+0')
```
> 2.2017764

## prepend

```ex
title = ["Will", "Hunting"]
["Good" | title]
```

## append

```ex
title ++ [2]
```

## insert

```ex
List.insert_at([1, 2, 3], 2, 77)
```
> [1, 2, 77, 3, 4]

## Update

### replace_at

```ex
List.replace_at([1, 2, 3], 0, 77)
```
> [77, 2, 3]

### update_at

```ex
List.update_at([7, 2, 3], 0, &(&1 + 10))
```
> [17, 2, 3]

## Loop

* [Looping through an array / list (learningwithjb.com)](http://learningwithjb.com/posts/looping-through-an-array-or-list-)

```ex
    ids = [11, 22, 33]
    Enum.each ids, fn id ->
       IO.inspect id
    end
```

## Check

```ex
is_list()
```

## [Traverse](https://hexdocs.pm/elixir/Enum.html)

```ex
iex> Enum.map([1, 2, 3], fn(x) -> x * 2 end)
[2, 4, 6]
```

## [Count](https://stackoverflow.com/a/36685025)

```ex
length([%{a: 0, b: 1},{}, []]) |> IO.inspect
```
> 3

