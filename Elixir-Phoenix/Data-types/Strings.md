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

> Opposite is `starts_with`

```ex
"aa" |> String.ends_with?(["1","2"])
```
> false

```ex
"ab-1" |> String.ends_with?(["1","2"])
```
> true

## Return first or last character

```ex
String.first("եոգլի")
```
> ե

```ex
String.last("եոգլի")
```
"ի">

## Split into chunks by a separator

```ex
uriParts = "my-uri-1" |> String.split("-")
```
> ["my", "uri", "1"]

## Take some of characters from the end


## parser libs

https://github.com/plataformatec/nimble_parsec
