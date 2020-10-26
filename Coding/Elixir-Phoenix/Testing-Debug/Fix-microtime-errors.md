# Fix-microtime-errors

* https://github.com/phoenixframework/phoenix/issues/2152

This is a MySQL + Ecto related issue. Current workaround above.

## Add `@timestamps_opts [type: :naive_datetime, usec: false]` at the top of the schema

```ex
@timestamps_opts [type: :naive_datetime, usec: false]
  schema "users" do
```
