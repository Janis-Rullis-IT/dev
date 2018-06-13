# Lists [] = Linked list

* learnelixir.tv/episodes/02-data-types
* See also [Tuples](Tuple.md)

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
List.insert_at()
```

## Loop

* [Looping through an array / list (learningwithjb.com)](http://learningwithjb.com/posts/looping-through-an-array-or-list-)

```ex
    ids = [11, 22, 33]
    Enum.each ids, fn id ->
       IO.inspect id
    end
```

## chexk

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