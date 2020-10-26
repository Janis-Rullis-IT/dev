# Raw queries

## Escaped IN() with an array

```ex
WHERE a.#{field} IN(#{to_sql_placeholder(value)})"

result = Ecto.Adapters.SQL.query!(Edurio.Repo, query, value)

# Get a string of SQL '?' placeholders for use in raw queries.
def to_sql_placeholder(list), do: List.duplicate("?", length(list)) |> Enum.join(",")
```

## Unescaped IN() with an array

```ex
user_ids_str = "'" <> Enum.join(user_ids, "', '") <> "'"

WHERE b.`id` IN(#{user_ids_str})
```

## Avoid datetime being converted to erl format

First see if changing fields type to `:naive_datetime` helps, if not use this workaround.

```ex
CONCAT(a.created_at, '') AS created_at
```