# Date

## Get current time in a DATETIME string.

```ex
def get_datetime_str(), do: DateTime.utc_now() |> DateTime.to_iso8601()
```