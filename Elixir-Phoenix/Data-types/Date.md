# Date

## Get current time in a DATETIME string.

```ex
def get_datetime_str(), do: DateTime.utc_now() |> DateTime.to_iso8601()
```

## Customize the format

```ex
d = DateTime.utc_now()
"#{d.year}-#{d.month}-#{d.day}_#{d.hour}-#{d.minute}"
```
> "2019-3-18_12-36"

## UNIX timestamp

```ex
timestamp_unix = DateTime.utc_now() |> DateTime.to_unix()
```
> 1552913034

## Get the elappsed time

```ex
timestamp_last = 1552913000
timestamp = DateTime.utc_now() |> DateTime.to_unix()
timestamp - timestamp_last
```
> 180

## Check if elapsed 5 minutes

```ex
timestamp_last > timestamp - 60 * 5
```
> true