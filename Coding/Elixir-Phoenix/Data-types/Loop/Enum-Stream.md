# Loop

* [Looping through an array / list (learningwithjb.com)](http://learningwithjb.com/posts/looping-through-an-array-or-list-)

## Exit will stop everything at the first step

```ex
Enum.each(["some", "example"], fn(x) -> x |> exit end)
```
> ** (exit) "some"

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
