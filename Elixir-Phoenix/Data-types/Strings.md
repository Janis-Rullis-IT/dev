# Strings

## Concat

```ex
IO.inspect "id: #{id} found."
```

## Trim

```ex
String.trim("\n  abc\n  ")
```
> "abc"

## Does the string ends with a specific substring


```ex
"aa" |> String.ends_with?(["1","2"])
```
> false

```ex
"ab-1" |> String.ends_with?(["1","2"])
```
> true

## Take some of characters from the end