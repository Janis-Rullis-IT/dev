# Lists [] = Linked list

learnelixir.tv/episodes/02-data-types

* See also [Tuples](Tuple.md)

## prepend

title = ["Will", "Hunting"] 
["Good" | title] 

## append

title ++ [2]

## inser
List.insert_at

## Loop

* [Looping through an array / list (learningwithjb.com)](http://learningwithjb.com/posts/looping-through-an-array-or-list-)

```ex
    ids = [11, 22, 33]
    Enum.each ids, fn id ->
       IO.inspect id
    end
```

## chexk

is_list
