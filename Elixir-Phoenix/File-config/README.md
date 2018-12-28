# File IO

## Current dir

```ex
File.cwd |> IO.inspect
```
> `{:ok, "/app/my_deps/incremental_slug"}`

## Read a secret file if it exists

```ex
if File.exists?("config/test.secret.exs") do
  import_config "test.secret.exs"
end
```